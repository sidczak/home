(function (win, $) {
    'use strict';

    /**
     * Konstruktor
     */
    function Homepage() {
        throw new TypeError();
    }

    /**
     * Prototyp Homepage
     */
    Homepage.prototype = (function () {

        return {

            init: function () {
                this.highlight();
                this.navbarHeader();
            },
            
            highlight: function() {
                hljs.initHighlightingOnLoad();
            },

            /**
             * navbarHeader()
             * Wyswietlanie gornej belki z glownym menu
             */
            navbarHeader: function () {
                /*
                var navbarHeader = '[data-selector="navbar-header"]',
                    $navbarHeader = $(navbarHeader),
                    fixedClass = 'top-nav-collapse';

                if (!$navbarHeader.hasClass(fixedClass)) {
                    setFixedClass();

                    $(window).scroll(function() {
                        setFixedClass();
                    });
                }

                function setFixedClass() {
                    if($navbarHeader.length > 0) {
                        if ($navbarHeader.offset().top > 50) {
                            $navbarHeader.addClass(fixedClass);
                        } else {
                            $navbarHeader.removeClass(fixedClass);
                        }
                    }
                }*/
            }
            
        };
    }());

    $(function () {
        var homepage = Object.create(Homepage.prototype);
        homepage.init();
    });

}(window, jQuery));