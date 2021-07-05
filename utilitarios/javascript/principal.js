var teste = "";

document.getElementById('form').addEventListener('submit', function(e) {
    e.preventDefault()
    
    var valores = pegarValoresForm(this)

    if (typeof valores == 'object') {
        let xhr = new XMLHttpRequest()
        xhr.open('POST', '../utilitarios/php/controladores/controlador.php', true)
        xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded")
        xhr.send("json="+JSON.stringify(valores))

        xhr.onreadystatechange = () => {

            if(xhr.readyState == 4) {
                var html = ""
                if(xhr.status == 200) {
                    html = xhr.responseText
                }
                var novo_html = document.querySelector('.terminal-content').innerHTML + html
                document.querySelector('.terminal-content').innerHTML = novo_html
                adicionarLinhaInicial()
            }
        
        }
    } else {
        var html = document.querySelector('.terminal-content').innerHTML + valores
        document.querySelector('.terminal-content').innerHTML = html
        adicionarLinhaInicial()
    }
})

function pegarValoresForm(form) {
    const formData = new FormData(form)
    var valores = Array();
    var erro = "";
    for (var input of formData.entries()) {
        if (input[1] == '')
            erro += "<span>O campo <strong>"+input[0]+"</strong> não pode estar vazio</span><br>"
        else
            valores.push(input[0]+'='+input[1])
    }

    if (erro != '')
        valores = '<p class="erro">'+erro+'</p>';
    else
        valores.push('controlador='+form.getAttribute('exe'))
    return valores
}

function adicionarLinhaInicial() {
    var html = document.querySelector('#terminal .terminal-content .linha-inicial').outerHTML
    document.querySelector('.terminal-content').innerHTML += html
}