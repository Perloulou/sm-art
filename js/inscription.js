
document.addEventListener('DOMContentLoaded', function (e) {

    console.log('Validation des formulaires');

    // Formulaire simple
    const loginForm = document.getElementById('form2');
    FormValidation.formValidation(loginForm, {
        fields: {
            mail: {
                validators: {
                    notEmpty: {
                        message: 'Email ne peut pas être vide',
                    },
                    emailAddress: {
                        message: "Le format de l'email est incorrect",
                    },
                },
            },
            login: {
                validators: {
                    notEmpty: {
                        message: 'Login ne peut pas être vide',
                    },
                },
            },
            pswd: {
                validators: {
                    notEmpty: {
                        message: 'Mot de passe ne peut pas être vide',
                    },
                    stringLength: {
                        min: 6,
                        message: 'Le mot de passe doit faire 6 caractères au moins',
                    },
                },
            },
            prenom: {
                validators: {
                    notEmpty: {
                        message: 'Prénom ne peut pas être vide',
                    },
                },
            },
            nom: {
                validators: {
                    notEmpty: {
                        message: 'Nom ne peut pas être vide',
                    },
                },
            },
            agree: {
                validators: {
                    notEmpty: {
                        message: "Merci d'accepter les conditions d'utilisation",
                    },

                },
            },
        },
        plugins: {
            message: new FormValidation.plugins.Message({ clazz: 'error' }),
            trigger: new FormValidation.plugins.Trigger(),
            submitButton: new FormValidation.plugins.SubmitButton(),
            defaultSubmit: new FormValidation.plugins.DefaultSubmit(),
        },
    });

});




function sweet() {
            swal.fire({
                    title: 'Compte crée !',
                    icon: 'success',
                    confirmButtonText: '<a href="./connexion.php">Se connecter</a>',
                     confirmButtonColor: '#f2f2f2',

            })
    }
