function MascaraNumeros(caracter){
    
    //passa para a tabela ascii
    if(window.event){
        var numero = caracter.charCode;
    }else{
        var numero = caracter.which;
    };
    // autoriza a digitaçao dos numeros 
    if(numero < 48 || numero > 57){
        //autoriza a digitaçao dos parenteses e traço
        if(numero != 40 && numero != 41 && numero != 45){
            return false;
        }
    };
}

const mascNome = () => {
      let texto = txtNome.value;
      texto = texto.replace(/[^a-zA-Z À-ÿ]/g,"")
      texto = texto.replace()
      txtNome.value = texto;
}
const mascCelular =() => {
      txtCelular.maxLength = "14";
      let texto = txtCelular.value;
      texto = texto.replace(/[^0-9]/g,"");
      texto = texto.replace(/(.)/,"($1");
      texto = texto.replace(/(...)/,"$1)");
      texto = texto.replace(/(.{9})/,"$1-");
      txtCelular.value = texto;
}