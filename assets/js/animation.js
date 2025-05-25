if (window.width > 992) {





    gsap.registerPlugin(ScrollTrigger);



    ScrollTrigger.defaults({

        toggleActions: "play none none reverse"

    })



    gsap.from('.logo div', {

        opacity: 0,

        delay: 1,

        x: 20

    })



    const menu_items = document.querySelector('.left-menu-items')

    gsap.from(menu_items.children, {

        opacity: 0,

        x: 0,

        duration: 1,

        delay: 1,

        stagger: {

            amount: 1

        }

    })



    const rmenu_items = document.querySelector('.right-menu-items')

    gsap.from(rmenu_items.children, {

        opacity: 0,

        x: 0,

        duration: 1,

        delay: 2.5,

        stagger: {

            amount: 1

        }

    })







    gsap.utils.toArray('.star').forEach(star => {

        gsap.fromTo(star, {

            rotation: 450,

            opacity: 0,

            y: 100

        }, {

            rotation: 0,

            opacity: 1,

            y: 0,

            duration: 1,

            delay: 1.5,

            scrollTrigger: star

        })

    })





    gsap.utils.toArray('.textsec').forEach(textsec => {

        gsap.fromTo(textsec, {

            letterSpacing: '10px',

            opacity: 0,

            x: 300,

            skewX: 65

        }, {

            letterSpacing: '0',

            opacity: 1,

            x: 0,

            skewX: 0,

            duration: 1.5,

            delay: 1,

            scrollTrigger: textsec

        })

    })



    gsap.utils.toArray('.text-p').forEach(p => {

        gsap.fromTo(p, {

            opacity: 0,

            x: 150,

            skewX: 30

        }, {

            opacity: 1,

            x: 0,

            skewX: 0,

            duration: 2,

            delay: 1,

            scrollTrigger: p



        })

    })





    gsap.utils.toArray('button').forEach(button => {

        gsap.fromTo(button, {

            opacity: 0,

        }, {

            opacity: 1,

            duration: 1,

            delay: 1,

            scrollTrigger: button



        })

    })





    gsap.from('.pyramid', {

        opacity: 0,

        scale: .5,

        duration: 1,

        delay: .5

    })



    gsap.fromTo('.hand', {

        scale: .2,

        opacity: 0,

        skewY: 30

    }, {

        scale: 1,

        opacity: 1,

        skewY: 0,

        duration: 1,

        delay: .5,

        scrollTrigger: '.hand'

    })







    gsap.utils.toArray('.line').forEach(line => {

        gsap.fromTo(line, {

            opacity: 0,

            width: '0%'

        }, {

            opacity: 1,

            width: '100%',

            duration: 1,

            delay: 1,

            scrollTrigger: line



        })

    })





    gsap.utils.toArray('.rotation').forEach(rotate => {

        gsap.fromTo(rotate, {

            opacity: 0,

            rotation: 350,

            scale: .2

        }, {

            opacity: 1,

            rotation: 0,

            scale: 1,

            duration: 1,

            delay: 1,

            scrollTrigger: rotate



        })

    })





    gsap.fromTo('.banner-image', {

        opacity: 0,

        scale: .1,

    }, {

        opacity: 1,

        scale: 1,

        duration: 1,

        delay: .5,

        stagger: {

            amount: 1

        },

        scrollTrigger: '.banner-image'

    })



    const menu = document.querySelector('.social-item')





    gsap.from(menu.children, {

        opacity: 0,

        x: 50,

        duration: 1.5,

        delay: .5,

        stagger: {

            amount: 1

        },

        scrollTrigger: {

            trigger: menu.children

        }

    })



    const menu2 = document.querySelector('.social-item2')





    gsap.from(menu2.children, {

        opacity: 0,

        x: 50,

        duration: 1.5,

        delay: .5,

        stagger: {

            amount: 1

        },

        scrollTrigger: {

            trigger: menu2.children

        }

    })





}

