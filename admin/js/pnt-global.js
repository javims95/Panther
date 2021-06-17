(function (global, jQuery, nucleo) {

    nucleo(global, jQuery);

})(typeof window !== 'undefined' ? window : this, jQuery, function (window, $) {

    var PNT = (function () {

        var core = {

            /* Limpiador de enlaces para las imagenes */
            limpiarEnlace: function (url) {

                var local = /localhost/;

                if (local.test(url)) {

                    var url_pathname = location.pathname,
                        indexPos = url_pathname.indexOf('wp-admin'),
                        url_pos = url_pathname.substr(0, indexPos),
                        url_delete = location.protocol + "//" + location.host + url_pos;

                    return url_pos + url.replace(url_delete, '');

                } else {

                    var url_real = location.protocol + '//' + location.hostname;
                    return url.replace(url_real, '');

                }

            },
            /* Método para validar los correos electrónicos */
            validarEmail: function (email) {

                var er = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;

                return er.test(email);

            },
            normalize: (function () {
                var from = "ÃÀÁÄÂÈÉËÊÌÍÏÎÒÓÖÔÙÚÜÛãàáäâèéëêìíïîòóöôùúüûÑñÇç",
                    to = "AAAAAEEEEIIIIOOOOUUUUaaaaaeeeeiiiioooouuuunncc",
                    mapping = {};

                for (var i = 0, j = from.length; i < j; i++)
                    mapping[from.charAt(i)] = to.charAt(i);

                return function (str) {
                    var ret = [];
                    for (var i = 0, j = str.length; i < j; i++) {
                        var c = str.charAt(i);
                        if (mapping.hasOwnProperty(str.charAt(i)))
                            ret.push(mapping[c]);
                        else
                            ret.push(c);
                    }
                    ret = ret.join('');

                    var specialChars = "!@#$^&%*()+=-[]\/{}|:<>?.ç";

                    for (var i = 0, j = specialChars.length; i < j; i++) {
                        ret = ret.replace(new RegExp("\\" + specialChars[i], 'gi'), '');
                    }

                    return ret;

                }

            })()

        }

        return core;

    })();

    window.PNT = window.$bc = PNT;

});

Array.prototype.unique = function (a) {
    return function () {
        return this.filter(a);
    }
}(function (a, b, c) {
    return c.indexOf(a, b + 1) < 0
});

String.prototype.capitalize = function (a) {
    return this.charAt(0).toUpperCase() + this.slice(1);
}