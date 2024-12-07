const express = require('express'); // Framework dentro do node 
const crypto = require('crypto'); // Biblioteca especifica para criptografar dados
const nodemailer = require('nodemailer'); //biblioteca especifica para e-mails
const mysql = require('mysql2');

const app = express();
app.use(express.json());
app.use(express.urlencoded({ extended: true }));

const emailPlataforma = "direitodireto.online@gmail.com";

function generateToken() {
    return crypto.randomBytes(16).toString('hex');
}

async function sendEmailToken(email, token) {
    const transporter = nodemailer.createTransport({
        service: 'gmail',
        auth: {
            user: emailPlataforma,
            pass: 'jtjv lyqr xvyg ghlp'
        }
    });

    const mailOptions = {
        from: emailPlataforma,
        to: email,
        subject: 'Seu Token de Verificação',
        text: `Seu token de verificação é: ${token}`
    };

    await transporter.sendMail(mailOptions);
}

function saveToken(email, token) {
    return new Promise((resolve, reject) => {
        const query = 'INSERT INTO tokens (email, token, expiration) VALUES (?, ?, DATE_ADD(NOW(), INTERVAL 15 MINUTE))';
        connection.query(query, [email, token], (err, results) => {
            if (err) return reject(err);
            console.log('Token salvo no banco de dados');
            resolve();
        });
    });
}

const connection = mysql.createConnection({
    host: 'localhost',
    user: 'root',
    password: '',
    database: 'direito_direto'
});

connection.connect((err) => {
    if (err) {
        console.error('Erro ao conectar ao banco de dados:', err);
        return;
    }
    console.log('Conectado ao banco de dados MySQL.');
});

function checkEmailExists(email) { 
    return new Promise((resolve, reject) => { 
        const queryCliente = 'SELECT * FROM clientes WHERE `e-mail` = ?'; 
        const queryAdvogado = 'SELECT * FROM advogados WHERE `e-mail` = ?';

        connection.query(queryCliente, [email], (err, results) => { 
            if (err) return reject(err); 
            resolve(results.length > 0); 
        });

        connection.query(queryAdvogado, [email], (err, results) => { 
            if (err) return reject(err); 
            resolve(results.length > 0); 
        });
    });
};

app.post('/enviar-token', async (req, res) => {
    
  try {
    const email = req.body.email;

    const emailExists = await checkEmailExists(email); 
    if (emailExists) { 
        console.log('E-mail encontrado no banco de dados:', email); 
    } else { 
        console.log('E-mail não encontrado no banco de dados:', email);
        return res.status(404).send('E-mail não encontrado no banco de dados.'); 
    }

    const token = generateToken();
    await sendEmailToken(email, token);
    await saveToken(email, token);
    res.redirect('http://localhost/projetos/Direito-Direto/View/autenticacao.php');
  } catch (err) {
      console.error('Erro ao enviar o token:', err);

      if (!res.headersSent) {
          res.status(500).send(`Erro ao enviar o token: ${err.message || "Erro desconhecido"}`);
      }
  }
});

app.listen(3000, () => {
    console.log('Servidor rodando em http://localhost:3000');
});
