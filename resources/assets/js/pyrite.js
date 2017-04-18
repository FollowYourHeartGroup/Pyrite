import '../../../public/semantic/dist/semantic';
import '../../../public/semantic/dist/components/transition';
import '../../../public/semantic/dist/components/dropdown';


jQuery(function($){
    $('.ui.sidebar')
    .sidebar('setting', 'transition', 'push');

    $('.ui.form.login')
    .form({
        fields: {
            name: {
                identifier: 'name',
                rules: [
                    {
                        type   : 'empty',
                        prompt : 'Please enter your name'
                    }
                ]
            }
        }
    })
    ;

    $('.ui.checkbox').checkbox();

});
