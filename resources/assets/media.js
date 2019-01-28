function openwindow(url, name, iWidth, iHeight) {
    var iTop = (window.screen.height - 30 - iHeight) / 2; //获得窗口的垂直位置;
    var iLeft = (window.screen.width - 10 - iWidth) / 2; //获得窗口的水平位置;
    window.open(url, name, 'height=' + iHeight + ',,innerHeight=' + iHeight + ',width=' + iWidth + ',innerWidth=' + iWidth + ',top=' + iTop + ',left=' + iLeft + ',toolbar=no,menubar=no,scrollbars=auto,resizeable=no,location=no,status=no');
}
function processSelectedFile(file, id) {
    $("#media-" + id).val(file)
    $('#preview-' + id).html(preview(file));
}
function preview(url) {
    var html = '<span class="file-icon has-img col-sm-2"><img src="{{$baseURL}}/storage/' + url + '" alt="Attachment" \/><\/span>';
    return html
}

(function () {
    var _meida_val = $('#media-{{$id}}').val()
    if (_meida_val) {
        $('#preview-{{$id}}').html(preview(_meida_val));
    }

    $(".select-elfinder-file").on('click', function (event) {
        event.preventDefault();
        var elfinderUrl = "/elfinder/popup/xxxx";
        openwindow(elfinderUrl, '选择文件', 850, 450);
    });
}())