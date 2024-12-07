    document.getElementById('submitBtn').addEventListener('click', function() { 
    const formData = new FormData();  

    const form1Data = new FormData(document.getElementById('form1')); 
    form1Data.forEach((value, key) => { formData.append(key, value); }); 

    const form2Data = new FormData(document.getElementById('form2')); 
    form2Data.forEach((value, key) => { formData.append(key, value); }); 

    const form3Data = new FormData(document.getElementById('form3')); 
    form3Data.forEach((value, key) => { formData.append(key, value); }); 

    // Verifique os dados enviados
    formData.forEach((value, key) => { console.log(key, value); });

    fetch('../Model/inserindo_dados_do_form_no_bd.php', { 
        method: 'POST', 
        body: formData 
    }).then(response => { 
        if(response.ok) { 
            return response.text(); 
        } 
        throw new Error('Network response was not ok.'); 
    }).then(data => { 
        console.log('Success:', data);
        window.location.href="../View/login.php"; 
    }).catch(error => { 
        console.error('Error:', error); 
    }); 
});
