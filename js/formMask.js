         jQuery(function ($) {
             $("input.Datanasc").mask("99/99/9999", {reverse: true});
             $("input.TEL").mask("(99) 9999-9999", {reverse: true});
             $("input.CEL").mask("(99) 9999?9-9999", {reverse: true});
             $("input.CPF").mask("999.999.999-99", {reverse: true});
             $("input.CEP").mask("99999-999", {reverse: true});
             $("input.CNPJ").mask("99.999.999/9999-99", {reverse: true});
         });