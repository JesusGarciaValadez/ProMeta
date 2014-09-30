//  @codekit-prepend "plugins.js"
/**
 *
 *  @function
 *  @description:   Anonimous function autoexecutable
 *  @params jQuery $.- An jQuery object instance
 *  @params window window.- A Window object Instance
 *  @author: @_Chucho_
 *
 */
(function ( $, window, document, undefined ) {
    
    //  When DOM is loaded
    $( function ( ) {
        
        Prometa.init();
        
        if ( $( ".loader" ).exists() ) {
           
            $( '.alert_background' ).fadeOut( 300 );
            $( ".loader" ).fadeOut( 300 );
        }
        
        //  Pone la clase current en el primer texto del home
        if ( $( "#home header" ).exists() ) {
            
            $( "#home header div article" ).first().addClass( 'current' );
        }
        
        //  Control del background
        if ( $( "#wrapper_background" ).exists() ) {
           
            var layers  = $( '#wrapper_background figure' ),
                controllers = $( 'header a' ),
                notices = $( 'header div article' ),
                timeCounter = 0,
                currentTab, tabLength;
            
            layers.eq(0).addClass( 'current' );
            
            currentTab  = 0;
            tabLength   = layers.length;
            
            //  Controla el cambio de background por medio de las flechas
            $( controllers ).on( 'click', function ( e ) {
                
                e.preventDefault();
                e.stopPropagation();
                
                currentTab  = $( '#wrapper_background figure.current' ).index();
                
                $( '#wrapper_background figure.current' ).fadeOut( 300, function () {
                    
                    $( this ).toggleClass( 'current' );
                });
                
                if ( $( e.currentTarget ).hasClass( 'left' ) ) {
                    
                    if ( currentTab <= 1 ) {
                        
                        layers.eq( 0 ).fadeIn( 300, function () {
                            
                            layers.eq( tabLength - 2 ).addClass( 'current' );
                        });
                        notices.eq( 0 ).fadeIn( 300, function () {
                            
                            notices.removeClass( 'current' ).removeAttr( 'class' );
                            notices.eq( tabLength - 2 ).addClass( 'current' ).removeAttr( 'style' );
                        });
                    } else {
                        
                        layers.eq( currentTab - 2 ).fadeIn( 300, function () {
                            
                            layers.eq( currentTab - 2 ).addClass( 'current' );
                        });
                        notices.eq( currentTab - 2 ).fadeIn( 300, function () {
                            
                            notices.removeClass( 'current' ).removeAttr( 'class' );
                            notices.eq( currentTab - 2 ).addClass( 'current' ).removeAttr( 'style' );
                        });
                    }
                } else if ( $( e.currentTarget ).hasClass( 'right' ) ) {
                    
                    if ( currentTab >= tabLength ) {
                        
                        layers.eq( 0 ).fadeIn( 300, function () {
                            
                            layers.eq( 0 ).addClass( 'current' );
                        });
                        notices.eq( 0 ).fadeIn( 300, function () {
                            
                            notices.removeClass( 'current' ).removeAttr( 'class' );
                            notices.eq( 0 ).addClass( 'current' ).removeAttr( 'style' );
                        });
                    } else {
                        
                        layers.eq( currentTab ).fadeIn( 300, function () {
                            
                            layers.eq( currentTab ).addClass( 'current' );
                        });
                        notices.eq( currentTab ).fadeIn( 300, function () {
                            
                            notices.removeClass( 'current' ).removeAttr( 'class' );
                            notices.eq( currentTab ).addClass( 'current' ).removeAttr( 'style' );
                        });
                    }
                }
                
                $( '#counter' ).css( 'width', 0 + 'px' );
                timeCounter = 0;
               
                /*
               
                //  Obtiene el src de la imagen, busca "_small." en la ruta y lo
                //  remplaza con "_small_hover." para que la imagen cambie por
                //  la imagen con hover
                var currentSrc  = $( '#wrapper_background figure.current img' ).attr( 'src' )
                var newSrc      = currentSrc.replace( /\_hover/gi, ''  );
                $( '#wrapper_background figure.current img' ).attr( 'src', newSrc );
                $( '#wrapper_background figure.current' ).removeClass( 'current' );
                $( e.currentTarget ).addClass( 'current' );
                var name    = $( '#wrapper_background figure.current img' ).attr( 'src' );
                name        = name.replace( /\_small\./gi, '_small_hover.' );
                $( '#wrapper_background figure.current img' ).attr( 'src', name );
                */
            });
            
            if ( $( '#timer' ).exists() ) {
                
                //  Controla el cambio de background aprox. cada 10 segundos.
                var interval   = setInterval( function ( ) {
                    
                    if ( timeCounter <= 100 ) {
                        
                        timeCounter += 0.1055;  //Sin Math.round
                        //timeCounter += 0.150465;  // Con Math.round
                    } else if ( timeCounter > 100 )  {
                        
                        currentTab  = $( '#wrapper_background figure.current' ).index();
                        $( '#wrapper_background figure.current' ).fadeOut( 300, function () {
                            
                            $( this ).toggleClass( 'current' );
                        });
                        
                        if ( currentTab >= tabLength ) {
                            
                            layers.eq( 0 ).fadeIn( 300, function () {
                                
                                layers.eq( 0 ).addClass( 'current' );
                            });
                            notices.eq( 0 ).fadeIn( 300, function () {
                                
                                notices.removeClass( 'current' ).removeAttr( 'class' );
                                notices.eq( 0 ).addClass( 'current' ).removeAttr( 'style' );
                            });
                        } else {
                            layers.eq( currentTab ).fadeIn( 300, function () {
                                
                                
                                layers.eq( currentTab ).addClass( 'current' );
                            });
                            notices.eq( currentTab ).fadeIn( 300, function () {
                                
                                notices.removeClass( 'current' ).removeAttr( 'class' );
                                notices.eq( currentTab ).addClass( 'current' ).removeAttr( 'style' );
                            });
                        }
                        timeCounter = 0;
                    }
                    
                    $( '#counter' ).css( 'width', timeCounter + '%' );
                }, 10 );
            }
        }
    } );
    
    //  When DOM is ready
    $( document ).on( 'ready', function ( e ) {
        
        //  Arregla tamaños del background al iniciar y al redimensionar la ventana
        var screenHeight, newHeight;
        var calculateHeight = function ( ) {
            
            screenHeight    = window.innerHeight;
            $( '#wrapper_background' ).height( screenHeight );
            newHeight       = screenHeight - 55;
            $( '#home #nav' ).css( 'top', newHeight + 'px' );
            $( '#header' ).centerWidth();
        };
        
        if ( $( '#wrapper_background' ).exists() ) {
            
            calculateHeight();
            
            $( window ).on( 'resize', function ( e ) {
                
                calculateHeight();
            } );
        }
        
        if ( $( '#home #nav' ).exists() ) {
            
            $( 'a[title="Home"]' ).on( 'click', function ( e ) {
                e.preventDefault();
                e.stopPropagation();
                
                Prometa.smoothScroll( '#home', 300 );
                
                $( 'nav ul li' ).removeClass( 'active' );
                Prometa.toggleClass( $( e.currentTarget ).parent(), 'active' );
                
                $( '#home' ).css( {
                    overflow: "hidden"
                } );
            } );
            $( 'a[title="Contacto"]' ).on( 'click', function ( e ) {
               
                e.preventDefault();
                e.stopPropagation();
               
                var topOffset   = $( '#contact_title' ).offset().top - 55;
                Prometa.smoothScroll( topOffset, 300 );
               
                $( 'nav ul li' ).removeClass( 'active' );
                Prometa.toggleClass( $( e.currentTarget ).parent(), 'active' );
               
                $( '#home' ).css( {
                    overflow: "auto"
                } );
            } );
            
            /**
             *
             *  Anchor the menu when at loadpage it is in to certain Y coord while doing scroll
             *
             */
            //  !Ancla el menú si al cargar la página el documento esta en cierta coordenada.
            Prometa.anchorMenu( '#home #nav', newHeight, {
                position:   'fixed',
                top:        '0px'
            }, {
                position:   'absolute',
                top:        newHeight + 'px'
            } );
            
            Prometa.anchorMenu( '#home', newHeight, {
                overflow: "auto"
            }, {
                overflow: "hidden"
            } );
            
            /**
             *
             *  Anchor the menu when the screen is up to certain Y coord while doing scroll
             *
             */
            //  !Ancla el menú cuando pasa de cierta coordenada Y al hacer scroll
            $( window ).on( 'scroll', function ( e ) {
               
                Prometa.anchorMenu( '#home #nav', newHeight, {
                    position:   'fixed',
                    top:        '0px'
                }, {
                    position:   'absolute',
                    top:        newHeight + 'px'
                } );
               
                if ( Prometa.tool === 0 ) {
                   
                    $( '#home' ).css( {
                        overflow: "hidden"
                    } );
                    $( 'a[title="Home"]' ).parent().addClass( 'active' );
                    $( 'a[title="Contacto"]' ).parent().removeClass( 'active' );
                } else if ( Prometa.tool >= newHeight ) {
                   
                    $( '#home' ).css( {
                        overflow: "auto"
                    } );
                    $( 'a[title="Home"]' ).parent().removeClass( 'active' );
                    $( 'a[title="Contacto"]' ).parent().addClass( 'active' );
                }
            });
        }
        
        //  Construye el Google Maps
        if ( $( '#map' ).exists() ) {
           
            Prometa.makeMapForContact( 19.405234, -99.171704, $( '#map' ) );
           
            $( window ).on( 'resize', function ( e ) {
               
                Prometa.makeMapForContact( 19.405234, -99.171704, $( '#map' ) );
            } );
        }
        
        //  !Crea una instancia de jQuery Overlay
        if ( $( '.alert_box' ).exists() ) {
            
            Prometa.doOverlay( $( 'a.alert_trigger' ), {
                effect: 'apple',
                close: $( '.alert_box a.close' ),
                closeOnClick: true,
                closeOnEsc: true,
                speed: 'normal',
                fixed: true,
                onBeforeLoad: function ( e ) {
                    
                    $( '.alert_background' ).height( '100%' );
                    ( $( '.alert_box a.close' ).exists() ) ? true : $( '.alert_box' ).prepend( Prometa.closer );
                    $( '.alert_box' ).centerWidth();
                    $( '.alert_box' ).centerHeight();
                    //( $( '.alert_box p' ).text() == '' ) ? $( '.alert_box p' ).remove() : false;
                },
                onLoad: function() {
                    $( '.alert_background' ).fadeIn( 100 );
                },
                onBeforeClose:  function ( ){
                    
                    $( '.alert_box' ).fadeOut( 10, function ( ) {
                        
                        $( '.alert_background' ).fadeOut( 10 );
                        /*$( '.alert_box h2' ).text( '' );
                        $( '.alert_box h4' ).text( '' );
                        ( $( '.alert_box p' ).exists() ) ? $( '.alert_box p' ).remove( ) : false;
                        ( $( '.alert_box form' ).exists() ) ? $( '.alert_box form' ).remove( ) : false;
                        ( $( '.alert_box table' ).exists() ) ? $( '.alert_box table' ).remove( ) : false;
                        ( $( '.alert_box div' ).exists() ) ? $( '.alert_box div' ).remove( ) : false;
                        ( $( '.alert_box button' ).exists() ) ? $( '.alert_box button' ).remove( ) : false;
                        ( $( '.alert_box div.confirm' ).exists() ) ? $( '.alert_box div.confirm' ).remove( ) : false;*/
                    } );
                },
                onClose: function ( e ) {}
            } );
            
            Prometa.overlay    = $( '.alert_trigger' ).data( 'overlay' );
            
            //$( '.alert_background' ).height( $( 'body' ).height() );
        }
        
        //  Crea una instancia de jQuery Overlay para el home de descubreone.mx
        //  Calcula la distancia entre el margen izquierdo para posicionar
        //  la capa del video. Si en menor de 0 (ocurre en iPhone) utiliza
        //  el ancho del body en vez del ancho de la ventana para hacer
        //  el cálculo
        if ( $( '.overlay' ).exists() ) {
            
            $( '.overlay' ).centerWidth();
            
            $( window ).on( {
                resize: function ( e ) {
                   
                    $( '.overlay' ).centerWidth();
                },
                touchstart: function ( e ) {
                   
                    $( '.overlay' ).centerWidth();
                },
                touchend: function ( e ) {
                   
                    $( '.overlay' ).centerWidth();
                }
            } );
        }
        
        // Validación de los formularios
        if ( $( 'form' ).exists() ) {
            
            Prometa.makesUniform( 'select' );
            
            var rules   = {
                    contact_name:       {
                        required:   true,
                        maxlength:  255
                    },
                    contact_business:   {
                        required:   true,
                        maxlength:  255
                    },
                    contact_phone:      {
                        required:   true,
                        number:     true,
                        digits:     true,
                        maxlength:  15
                    },
                    contact_mail:       {
                        required:   true,
                        email:      true
                    },
                    contact_area:       {
                        required:   true
                    },
                    contact_message:    {
                        required:   true,
                        maxlength:  512
                    }
                };
            var messages    = {
                    contact_name:       "Por favor, escribe tu nombre",
                    contact_business:   "Por favor, escribe el nombre de tu empresa",
                    contact_phone:      "Por favor, escribe tu teléfono",
                    contact_mail:       "Por favor, escribe tu email",
                    contact_area:       "Por favor, selecciona una opción",
                    contact_message:    "Por favor, escribe un mensaje",
                    minlength: "Por favor, haga su respuesta más amplia.",
                    maxlength: "Por favor, acorte su respuesta",
                    email: "Escriba un email válido",
                    number: "Escriba solo números",
                    digits: "Escriba solo números",
                };
           
            Prometa.validateForms( rules, messages );
        }
        
        //  Handler de contenido de textarea
        if ( $( 'textarea' ).exists() ) {
           
            $( 'textarea' ).val( 'Mensaje' );
            Prometa.toggleValue( 'textarea', "Mensaje" );
        }
        
        //  Carruseles y efectos del Home
        if ( $( '#one' ).exists() ) {
           
            Prometa.inicializeCarrousel( '#header_scrollable', {
                speed: 1000,
                circular: true,
                keyboard: false,
                next: null,
                prev: null
            }, {
                activeClass: "active",
                navi: ".navi",
                naviItem: "a",
                indexed: false
            }, {
                steps: 1,
                interval: 10000,
                autoplay: true,
                autopause: true
            } );
            Prometa.inicializeCarrousel( '#tips_scrollable', {
                speed: 1000,
                circular: true,
                keyboard: false,
                next: ".next",
                prev: ".prev"
            }, {
                activeClass: "active",
                navi: ".naviTabs",
                naviItem: "a",
                indexed: true
            }, {
                steps: 1,
                interval: 15000,
                autoplay: true,
                autopause: true
            } );
        }
        
        //  Carruseles y efectos de sección Servicios
        if ( $( '#services' ).exists() ) {
            
            Prometa.inicializeCarrousel( '.services_subtitle .information.scrollable', {
                speed: 500,
                circular: false,
                keyboard: false,
                next: "#services_descriptions .information.scrollable .next",
                prev: "#services_descriptions .information.scrollable .prev"
            }, {
                activeClass: "active",
                navi: ".navi",
                naviItem: "a",
                indexed: false
            }, {
                steps: 1,
                interval: 10000,
                autoplay: false,
                autopause: false
            } );
            Prometa.inicializeCarrousel( '#services_descriptions .information.scrollable', {
                speed: 500,
                circular: false,
                keyboard: false,
                next: ".next",
                prev: ".prev"
            }, {
                activeClass: "active",
                navi: ".naviTabs",
                naviItem: "a",
                indexed: true
            }, {
                steps: 1,
                interval: 15000,
                autoplay: false,
                autopause: false
            } );
            
            var carrouselSubtitle           = $( '.services_subtitle' );
            var carrouselSubtitleScrollable = carrouselSubtitle.find( '.information.scrollable' ).data( 'scrollable' );
            var carrouselController         = $( '#services_descriptions .information.scrollable' ).data( 'scrollable' );
            var trigger;
            
            $( '#services_descriptions .scrollable a' ).on( 'click', function ( e ) {
                
                if ( $( e.currentTarget).hasClass( 'next' ) ) {
                    trigger = "next";
                } else if ( $( e.currentTarget).hasClass( 'next' ) ) {
                    trigger = "prev";
                }
            } );
            
            //  Hace la animación de retraso para el título
            carrouselController.onBeforeSeek( function ( e ) {
                
                var carrouselIndex      = carrouselController.getIndex();
                var changeBackground    = function () {
                    if ( carrouselSubtitle.hasClass( 'consultancy' ) ) {
                        
                        carrouselSubtitle.removeClass( 'consultancy' ).addClass( 'eficiency' );
                        carrouselSubtitleScrollable.next( 500 );
                    } else if ( carrouselSubtitle.hasClass( 'eficiency' ) )  {
                        
                        carrouselSubtitle.removeClass( 'eficiency' ).addClass( 'consultancy' );
                        carrouselSubtitleScrollable.prev( 500 );
                    }
                    carrouselSubtitle.dequeue().fadeIn( 250 );
                }; 
                
                setTimeout( function () {
                    
                    if ( trigger === "next" ) {
                        
                        carrouselSubtitle.dequeue().fadeOut( 250, changeBackground );
                    } else if ( trigger === "prev" ) {
                        
                        carrouselSubtitle.dequeue().fadeOut( 250, changeBackground );
                    }
                }, 200 );
            } );
        }
    } );
    
})( jQuery, window, document );