function mascaraData(dom) {
    if (dom.value.length == 2 || dom.value.length == 5) {
        dom.value = dom.value + '/'
    }
    if (dom.value.length >= 11) {
        dom.value = dom.value.substr(0, 10)
    }
}