var json = {
 "locale": "es",
 "title": "Mi relación con el trabajo",
 "pages": [
  {
   "name": "page1",
   "elements": [
    {
     "type": "matrix",
     "name": "Mi relación con el trabajo",
     "columns": [
      " Nunca",
      "Casi Nunca",
      "Regularmente",
      "Casi Siempre",
      "Siempre"
     ],
     "rows": [
      "Vivo Estresado y agotado, siento que esto ha sido progresivo",
      "Me sobre exijo para que reconozcan mi trabajo",
      "La prisa es mi compañera y nunca se terminan las actividades",
      "Estoy siempre disponible al teléfono para atender los pendientes y mis asuntos pueden esperar",
      "Creo que lo he dado todo y no me siento realizado",
      "Dejo de comer y/o dormir por los pendientes de la oficina"
     ]
    }
   ]
  },
  {
   "name": "page2",
   "elements": [
    {
     "type": "text",
     "name": "name",
     "title": "Nombre:"
    },
    {
     "type": "text",
     "name": "email",
     "title": "Tu correo:"
    }
   ],
   "title": "Por favor entra tu nombre y correo:"
  }
 ],
 "showProgressBar": "bottom"
};

window.survey = new Survey.Model(json);

survey
    .onComplete
    .add(function (result) {
        document
            .querySelector('#surveyResult')
            .innerHTML = "result: " + JSON.stringify(result.data);
    });

survey.showProgressBar = 'bottom';

$("#surveyElement").Survey({model: survey});
