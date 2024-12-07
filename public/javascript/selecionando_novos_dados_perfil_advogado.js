document.querySelectorAll('#salvar').forEach(item => {
item.addEventListener('click', () => {
    let resumoProfissional = document.getElementById('paragrafo-resumo').innerText;
    let especialidade1 = document.getElementById('especialiade_1').innerText;
    let especialidade2 = document.getElementById('especialiade_2').innerText;
    let especialidade3 = document.getElementById('especialiade_3').innerText;
    let xhr = new XMLHttpRequest();
    xhr.open('POST', '../Controller/atualizar_dados_perfil_advogado.php', true);
    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
    xhr.onreadystatechange = function() {
        if (xhr.readyState == 4 && xhr.status == 200) {
            alert('Dados atualizados com sucesso!');
        }
    };
    xhr.send(`resumo_profissional=${encodeURIComponent(resumoProfissional)}&especialidade_1=${encodeURIComponent(especialidade1)}&especialidade_2=${encodeURIComponent(especialidade2)}&especialidade_3=${encodeURIComponent(especialidade3)}`);
});
});
    