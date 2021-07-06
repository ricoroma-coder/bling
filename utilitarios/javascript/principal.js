if (document.getElementById('form') != null) {
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
}

if (document.querySelector('#terminal .scroll') != null) {
    document.querySelector('#terminal .scroll').addEventListener('click', function () {
        var classe = this.getAttribute('class')
        var opened = classe.indexOf('opened') >= 0
        var terminal_content = document.querySelector('#terminal .terminal-content')
        if (opened) {
            classe = classe.replace('opened', 'closed');
            terminal_content.setAttribute('class', terminal_content.getAttribute('class').replace('opened', 'closed'))
        } else {
            classe = classe.replace('closed', 'opened');
            terminal_content.setAttribute('class', terminal_content.getAttribute('class').replace('closed', 'opened'))

        }
        this.setAttribute('class', classe)
    })
}

if (document.querySelector('#terminal .options .clean') != null) {
    document.querySelector('#terminal .options .clean').addEventListener('click', function () {
        var html = '<p>© Terminal by Roma Technologies</p>'+document.querySelector('#terminal .terminal-content .linha-inicial').outerHTML
        document.querySelector('#terminal .terminal-content').innerHTML = html;
    })
}

function linkarPagina(dom) {
    var pagina = dom.getAttribute('href');
    window.location.href = 'componentes/'+pagina;
}

function abrirItem(elemento) {
    var item = buscarParent('.item', elemento)
    if (item != null) {
        console.log(item.getAttribute('class'))
        if (item.getAttribute('class').indexOf('closed') >= 0)
            item.setAttribute('class', item.getAttribute('class').replaceAll('closed', 'opened'))
        else
            item.setAttribute('class', item.getAttribute('class').replaceAll('opened', 'closed'))
    }
}

function redirecionarIndex() {
    window.location.href = "../index.php"
}

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

function buscarParent(query_selector, dom) {
    var seletor = query_selector.substr(0, 1) == '.' ? 'class' : 'id'
    var valor = query_selector.substr(1)
    var loop = true
    var pai = null

    while (loop) {
        pai = dom.parentElement
        if ((pai.getAttribute('class') != null && pai.getAttribute('class').indexOf(valor) >= 0) || pai.nodeName == 'html')
            loop = false
        else
            dom = pai
    }

    return pai
}