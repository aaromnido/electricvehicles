---
title: Contacto
form:
    name: contacto
    fields:
        -
            name: name
            label: Nombre
            placeholder: 'Introduce tu nombre completo...'
            autofocus: 'on'
            autocomplete: 'on'
            type: text
            validate:
                required: true
        -
            name: email
            label: Email
            placeholder: 'Introduce tu email...'
            type: email
            validate:
                required: true
        -
            name: message
            label: Mensaje
            placeholder: 'Introduce tu consulta para que podamos ayudarte..'
            type: textarea
            validate:
                required: true
    buttons:
        -
            type: submit
            value: Envíar
        -
            type: reset
            value: Limpiar
    process:
        -
            email:
                subject: '[Site Contact Form] {{ form.value.name|e }}'
                body: '{% include ''forms/data.html.twig'' %}'
        -
            save:
                fileprefix: contact-
                dateformat: Ymd-His-u
                extension: txt
                body: '{% include ''forms/data.txt.twig'' %}'
        -
            message: 'Gracias, en breves nos pondremos en contacto contigo. :)'
        -
            display: thankyou
---

## Formulario de contacto

Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec interdum blandit sagittis. Vestibulum hendrerit sed sem ac tempor. Morbi eget ex augue. Sed quam mi, viverra quis erat non, hendrerit luctus sapien. Donec magna urna, vestibulum pharetra porta eget, vestibulum ut libero. 