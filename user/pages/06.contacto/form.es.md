---
title: Contacto

form:
    name: contacto

    fields:
        - name: name
          label: Nombre
          placeholder: Introduce tu nombre completo...
          autofocus: on
          autocomplete: on
          type: text
          validate:
            required: true

        - name: email
          label: Email
          placeholder: Introduce tu email...
          type: email
          validate:
            required: true

        - name: message
          label: Mensaje
          placeholder: Introduce tu consulta para que podamos ayudarte..
          type: textarea
          validate:
            required: true

    buttons:
        - type: submit
          value: Envíar
        - type: reset
          value: Limpiar

    process:
        - email:
            subject: "[Site Contact Form] {{ form.value.name|e }}"
            body: "{% include 'forms/data.html.twig' %}"
        - save:
            fileprefix: contact-
            dateformat: Ymd-His-u
            extension: txt
            body: "{% include 'forms/data.txt.twig' %}"
        - message: Gracias, en breves nos pondremos en contacto contigo. :)
        - display: thankyou
---

## Formulario de contacto