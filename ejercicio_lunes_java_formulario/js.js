//+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
//          EJERCICIO 2  -->  ESTABLECER LAS COOKIES
//+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

document.addEventListener("DOMContentLoaded", function () {
  // Función para establecer una cookie con un nombre, un valor y un tiempo de expiración en días
  function setCookie(name, value, days) {
    let expires = "";
    if (days) {
      let date = new Date(); // Crear una nueva fecha
      date.setTime(date.getTime() + days * 24 * 60 * 60 * 1000); // Sumar los días en milisegundos
      expires = "; expires=" + date.toUTCString(); // Convertir la fecha a formato UTC
    }
    document.cookie = name + "=" + value + ";path=/" + expires; // Asignar la cookie con el valor y expiración
  }

  // Función para obtener el valor de una cookie por su nombre
  function getCookie(name) {
    let nameEQ = name + "="; // Definir el prefijo de la cookie
    let ca = document.cookie.split(";"); // Dividir todas las cookies almacenadas
    for (let i = 0; i < ca.length; i++) {
      let c = ca[i].trim(); // Eliminar espacios en blanco
      if (c.indexOf(nameEQ) === 0) return c.substring(nameEQ.length, c.length); // Retornar el valor de la cookie si coincide el nombre
    }
    return 0; // Retornar 0 si la cookie no existe
  }

  // Obtener el número de intentos desde la cookie o establecerlo en 0 si no existe
  let intentos = parseInt(getCookie("intentos")) || 0;
  let intentosContainer = document.getElementById("intentos");
  if (intentosContainer) {
    intentosContainer.innerHTML =
      "Intento de Envíos del formulario: " + intentos;
  }

  // Agregar evento al formulario para contar intentos de envío
  let formulario = document.getElementById("formulario");
  if (formulario) {
    formulario.addEventListener("submit", function (event) {
      event.preventDefault(); // Evitar el envío real del formulario
      intentos++; // Incrementar el contador de intentos
      setCookie("intentos", intentos, 365); // Guardar el nuevo valor en la cookie con una duración de 1 año

      if (intentosContainer) {
        intentosContainer.innerHTML =
          "Intento de Envíos del formulario: " + intentos; // Actualizar el contenido del contenedor
      }
    });
  }
});

//+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
//          EJERCICIO 3  -->  Cada vez q Nombre y Apellidos pierdan el foco, el contenido de los campos se comvertirá en mayúsculas.
//+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

document.addEventListener("DOMContentLoaded", function () {
  // Seleccionar los campos de entrada por su ID
  let nombreInput = document.getElementById("nombre");
  let apellidosInput = document.getElementById("apellidos");

  // Función para convertir el texto a mayúsculas
  function convertirAMayusculas(event) {
    event.target.value = event.target.value.toUpperCase();
  }

  // Agregar evento "blur" a los campos
  if (nombreInput) {
    nombreInput.addEventListener("blur", convertirAMayusculas);
  }

  if (apellidosInput) {
    apellidosInput.addEventListener("blur", convertirAMayusculas);
  }
});

//+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
//          EJERCICIO 4  -->  Realizar una función que valide los campos de texto NOMBRE y APELLIDOS.
//                            Si se produce algún error mostrar el mensaje en el contenedor "errores" y poner
//                            el foco en los campos correspondientes.
//+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

document.addEventListener("DOMContentLoaded", function () {
  document
    .getElementById("formulario")
    .addEventListener("submit", function (event) {
      let errores = "";
      let nombre = document.getElementById("nombre");
      let apellidos = document.getElementById("apellidos");
      let contenedorErrores = document.getElementById("errores");

      // Limpiar mensajes previos
      contenedorErrores.innerHTML = "";
      nombre.style.border = "";
      apellidos.style.border = "";

      // Validación de Nombre
      if (nombre.value.trim() === "") {
        errores += "El campo Nombre es obligatorio.<br>";
        nombre.style.border = "2px solid red";
        nombre.focus();
      }

      // Validación de Apellidos
      if (apellidos.value.trim() === "") {
        errores += "El campo Apellidos es obligatorio.<br>";
        apellidos.style.border = "2px solid red";
        if (nombre.value.trim() !== "") {
          apellidos.focus();
        }
      }

      // Mostrar errores si los hay
      if (errores !== "") {
        contenedorErrores.innerHTML = `<p style='color:red;'>${errores}</p>`;
        event.preventDefault(); // Evitar envío del formulario
      }
    });
});

//+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
//          EJERCICIO 5  -->  Validar la EDAD que contenga solamente valores numéricos y que esté en el
//                            rango de 0 a 105. Si se produce algún error mostrar el mensaje en el contenedor
//                            "errores" y poner el foco en el campo EDAD.
//+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

document.addEventListener("DOMContentLoaded", function () {
  document
    .getElementById("formulario")
    .addEventListener("submit", function (event) {
      function validarEdad(event) {
        let edad = document.getElementById("edad");
        let contenedorErrores = document.getElementById("errores");
        let errores = "";

        //limpiar mensajes previos
        contenedorErrores.innerHTML = "";
        edad.style.border = "";

        //validación de EDAD
        if (
          !/^[0-9]+$/.test(edad.value) ||
          edad.value < 0 ||
          edad.value > 105
        ) {
          errores += "La edad DEBE ser un NUMERO entre 0 y 105. <br>";
          edad.style.border = "2px solid red";
          edad.focus();
          event.preventDefault(); // no enviar el formulario si hay errores en el.
        }

        if (errores !== "") {
          contenedorErrores.innerHTML = `<p style='color:red;'>${errores}</p>`;
        }
      }
      document
        .getElementById("formulario")
        .addEventListener("submit", validarEdad);
    });
});

//+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
//          EJERCICIO 6  -->  Validar el NIF. Utilizar una expresión regular que permita solamente 8 números
//                            un guión y una letra. Si se produce algún error mostrar el mensaje en el
//                            contenedor "errores" y poner el foco en el campo NIF. No es necesario validar
//                            que la letra sea correcta. Explicar las partes de la expresión regular mediante
//                            comentarios.
//+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

document.addEventListener("DOMContentLoaded", function () {
  function validarNIF(event) {
    let nif = document.getElementById("nif");
    let contenedorErrores = document.getElementById("errores");
    let errores = "";

    // Limpiar mensajes previos
    contenedorErrores.innerHTML = "";
    nif.style.border = "";

    // Expresión regular para validar NIF: 8 números seguidos de una letra
    let regexNIF = /^[0-9]{8}[A-Za-z]$/;

    if (!regexNIF.test(nif.value)) {
      errores +=
        "El NIF debe tener 8 números y una letra sin guion (ejemplo: 12345678A).<br>";
      nif.style.border = "2px solid red";
      nif.focus();
      event.preventDefault(); // Evitar envío del formulario si hay errores
    }

    // Mostrar errores si los hay
    if (errores !== "") {
      contenedorErrores.innerHTML += `<p style='color:red;'>${errores}</p>`;
    }
  }

  document
    .getElementById("formulario")
    .addEventListener("submit", function (event) {
      validarNIF(event);
    });
});

//+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
//          EJERCICIO 7  -->  Validar el E-MAIL. Utilizar una expresión regular que nos permita comprobar
//                            que el e-mail sigue un formato correcto. Si se produce algún error mostrar el
//                            mensaje en el contenedor "errores" y poner el foco en el campo E-MAIL.
//                            Explicar las partes de la expresión regular mediante comentarios.
//+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

document.addEventListener("DOMContentLoaded", function () {
  function validarEmail(event) {
    let email = document.getElementById("email");
    let contenedorErrores = document.getElementById("errores");
    let errores = "";

    // Limpiar mensajes previos
    contenedorErrores.innerHTML = "";
    email.style.border = "";

    /* Expresión regular para validar un e-mail:
     * ^[\w.-]+ : Comienza con uno o más caracteres alfanuméricos, puntos o guiones.
     * @[\w.-]+ : Debe contener un '@' seguido de caracteres alfanuméricos, puntos o guiones.
     * \.[a-zA-Z]{2,}$ : Termina con un punto seguido de 2 o más letras (dominio válido como .com, .es, .net).
     */
    let regexEmail = /^[\w.-]+@[\w.-]+\.[a-zA-Z]{2,}$/;

    if (!regexEmail.test(email.value)) {
      errores +=
        "El MAIL debe tener un FORMATO válido (ejemplo: nombredeusuario@dominio.com).<br>";
      email.style.border = "2px solid red";
      email.focus();
      event.preventDefault(); // Evitar envío del formulario si hay errores
    }

    // Mostrar errores si los hay
    if (errores !== "") {
      contenedorErrores.innerHTML += `<p style='color:red;'>${errores}</p>`;
    }
  }

  document
    .getElementById("formulario")
    .addEventListener("submit", function (event) {
      validarEmail(event);
    });
});

//+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
//          EJERCICIO 8  -->  Validar que se haya seleccionado alguna de las PROVINCIAS. Si se produce
//                            algún error mostrar el mensaje en el contenedor "errores" y poner el foco en el
//                            campo PROVINCIA.
//+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

document.addEventListener("DOMContentLoaded", function () {
  function validarProvincia(event) {
    let provincia = document.getElementById("provincia"); // Suponiendo que el id del campo es "provincia"
    let contenedorErrores = document.getElementById("errores");
    let errores = "";

    // Limpiar mensajes previos
    contenedorErrores.innerHTML = "";
    provincia.style.border = "";

    // Validar que se haya seleccionado una provincia
    if (provincia.value === "0") {
      errores += "Debe seleccionar una PROVINCIA.<br>";
      provincia.style.border = "2px solid red";
      provincia.focus();
      event.preventDefault(); // Evitar envío del formulario si hay errores
    }

    // Mostrar errores si los hay
    if (errores !== "") {
      contenedorErrores.innerHTML += `<p style='color:red;'>${errores}</p>`;
    }
  }

  document
    .getElementById("formulario")
    .addEventListener("submit", function (event) {
      validarProvincia(event);
    });
});

//+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
//          EJERCICIO 9  -->  Validar el campo FECHA utilizando una expresión regular. Debe cumplir
//                            alguno de los siguientes formatos: dd/mm/aaaa o dd-mm-aaaa. No se pide
//                            validar que sea una fecha de calendario correcta. Si se produce algún error
//                            mostrar el mensaje en el contenedor "errores" y poner el foco en el campo
//                            FECHA. Explicar las partes de la expresión regular mediante comentarios.
//+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

document.addEventListener("DOMContentLoaded", function () {
  function validarFecha(event) {
    let fecha = document.getElementById("fecha");
    let contenedorErrores = document.getElementById("errores");
    let errores = "";

    // Limpiar mensajes previos
    contenedorErrores.innerHTML = "";
    fecha.style.border = "";

    // Expresión regular para validar fecha en formato dd/mm/aaaa o dd-mm-aaaa
    let regexFecha = /^(0[1-9]|[12][0-9]|3[01])[-\/](0[1-9]|1[0-2])[-\/]\d{4}$/;

    // Validar si la fecha cumple con el formato
    if (!regexFecha.test(fecha.value)) {
      errores +=
        "La FECHA debe tener el formato válido (dd/mm/aaaa o dd-mm-aaaa).<br>";
      fecha.style.border = "2px solid red";
      fecha.focus();
      event.preventDefault(); // Evitar envío del formulario si hay errores
    }

    // Mostrar errores si los hay
    if (errores !== "") {
      contenedorErrores.innerHTML += `<p style='color:red;'>${errores}</p>`;
    }
  }

  document
    .getElementById("formulario")
    .addEventListener("submit", function (event) {
      validarFecha(event);
    });
});

//+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
//          EJERCICIO 10  --> Validar el campo TELEFONO utilizando una expresión regular. Debe permitir 9
//                            dígitos obligatorios. Si se produce algún error mostrar el mensaje en el
//                            contenedor "errores" y poner el foco en el campo TELEFONO. Explicar las
//                            partes de la expresión regular mediante comentarios.
//+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

document.addEventListener("DOMContentLoaded", function () {
  function validarTelefono(event) {
    let telefono = document.getElementById("telefono");
    let contenedorErrores = document.getElementById("errores");
    let errores = "";

    // Limpiar mensajes previos
    contenedorErrores.innerHTML = "";
    telefono.style.border = "";

    // Expresión regular para validar teléfono con 9 dígitos
    let regexTelefono = /^\d{9}$/;

    // Validar si el teléfono cumple con el formato
    if (!regexTelefono.test(telefono.value)) {
      errores += "El TELÉFONO debe tener exactamente 9 dígitos.<br>";
      telefono.style.border = "2px solid red";
      telefono.focus();
      event.preventDefault(); // Evitar envío del formulario si hay errores
    }

    // Mostrar errores si los hay
    if (errores !== "") {
      contenedorErrores.innerHTML += `<p style='color:red;'>${errores}</p>`;
    }
  }

  document
    .getElementById("formulario")
    .addEventListener("submit", function (event) {
      validarTelefono(event);
    });
});

//+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
//          EJERCICIO 11  --> Validar el campo HORA utilizando una expresión regular. Debe seguir el patrón 
//                            de hh:mm. No es necesario validar que sea una hora correcta. Si se produce 
//                            algún error mostrar el mensaje en el contenedor "errores" y poner el foco en el 
//                            campo HORA. Explicar las partes de la expresión regular mediante comentarios. 
//+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

document.addEventListener("DOMContentLoaded", function () {
  function validarHora(event) {
      let hora = document.getElementById("hora");
      let contenedorErrores = document.getElementById("errores");
      let errores = "";

      // Limpiar mensajes previos
      contenedorErrores.innerHTML = "";
      hora.style.border = "";

      // Expresión regular para validar hora en formato hh:mm
      let regexHora = /^(0[0-9]|1[0-9]|2[0-3]):([0-5][0-9])$/;

      // Validar si la hora cumple con el formato
      if (!regexHora.test(hora.value)) {
          errores += "La HORA debe tener el formato válido (hh:mm).<br>";
          hora.style.border = "2px solid red";
          hora.focus();
          event.preventDefault(); // Evitar envío del formulario si hay errores
      }

      // Mostrar errores si los hay
      if (errores !== "") {
          contenedorErrores.innerHTML += `<p style='color:red;'>${errores}</p>`;
      }
  }

  document.getElementById("formulario").addEventListener("submit", function(event) {
      validarHora(event);
  });
});

//+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
//          EJERCICIO 11  --> Pedir confirmación de envío del formulario. Si se confirma el envío realizará el 
//                            envío de los datos; en otro caso cancelará el envío.  
//+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

document.addEventListener("DOMContentLoaded", function () {
  document.getElementById("formulario").addEventListener("submit", function(event) {
      // Pedir confirmación al usuario
      let confirmarEnvio = window.confirm("¿Estás seguro de que deseas enviar el formulario?");

      // Si el usuario cancela, evitar el envío del formulario
      if (!confirmarEnvio) {
          event.preventDefault(); // Evita el envío del formulario
      }
  });
});

//+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
//           Sacar todos los errores en pantalla que falten
//+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

document.addEventListener("DOMContentLoaded", function () {
  document.getElementById("formulario").addEventListener("submit", function(event) {
      let contenedorErrores = document.getElementById("errores");
      let errores = "";

      // Limpiar mensajes previos
      contenedorErrores.innerHTML = "";
      
      // Verificar si hay campos vacíos
      let campos = document.querySelectorAll("#formulario input, #formulario select");
      campos.forEach(function(campo) {
          // Si el campo es obligatorio y está vacío, mostramos un error
          if ((campo.type === "text" || campo.type === "email" || campo.type === "tel") && campo.value.trim() === "") {
              errores += `El campo ${campo.previousElementSibling.innerText} es obligatorio.<br>`;
              campo.style.border = "2px solid red"; // Resaltar el campo vacío
          } else {
              campo.style.border = ""; // Limpiar estilo de borde
          }
      });

      // Si hay errores, mostrar el mensaje y evitar el envío
      if (errores !== "") {
          contenedorErrores.innerHTML += `<p style='color:red;'>${errores}</p>`;
          event.preventDefault(); // Evitar el envío del formulario
          return; // Detener la ejecución si hay errores
      }
  });
});