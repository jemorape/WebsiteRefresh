var defaultThemeColors = Survey
    .StylesManager
    .ThemeColors["default"];
defaultThemeColors["$main-color"] = "#ef7e97";
defaultThemeColors["$main-hover-color"] = "#db4e6d";
defaultThemeColors["$text-color"] = "#4a4a4a";
defaultThemeColors["$header-color"] = "#ef7e97";



Survey
    .StylesManager
    .applyTheme();
var json = {
 "locale": "es",
 "title": {
  "default": "Mi relaci\u00F3n con el trabajo",
  "es": "Test"
 },
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
     "type": "matrix",
     "name": "Mi relación con el equipo de trabajo",
     "columns": [
      "Nunca",
      "Casi Nunca",
      "Regularmente",
      "Casi Siempre",
      "Siempre"
     ],
     "rows": [
      "Cuando estoy estresado soy factor de impulso para mi equipo",
      "Cuando doy una indicación, soy claro y se cumple en tiempo y forma",
      "Confío en mi equipo y delego responsabilidades",
      "Me doy tiempo de conocer a mi equipo para conocer su potencial",
      "Mi relación con mis colegas o jefes es colaborativa y genera resultados"
     ]
    }
   ]
  },
  {
   "name": "page3",
   "elements": [
    {
     "type": "matrix",
     "name": "Mi relación en la sociedad",
     "columns": [
      "Nunca",
      "Casi Nunca",
      "Regularmente",
      "Casi Siempre",
      "Siempre"
     ],
     "rows": [
      "Veo a otros felices, disfrutando  y yo no me siento igual",
      "En el coche voy quejándome de lo mal que manejan los otros",
      "Me quejó del gobierno, mi jefe, mis problemas y son  tema de conversación",
      "Mi vida social ha decaído, ya no salgo como antes, estoy cansado y no tengo tiempo",
      "Voy a las reuniones y no estoy presente, sigo pensando en los pendientes de la oficina",
      "Cuando llego a casa, paso más tiempo aislado viendo televisión que conviviendo"
     ]
    }
   ]
  },
  {
   "name": "page4",
   "elements": [
    {
     "type": "matrix",
     "name": "Mi entorno",
     "columns": [
      "Nunca",
      "Casi Nunca",
      "Regularmente",
      "Casi Siempre",
      "Siempre"
     ],
     "rows": [
      "Admiro y respeto la naturaleza, cuido la vida de los animales, incluso esos que me desagradan",
      "Tengo hábitos que contribuyen con el cuidado del planeta",
      "Mantengo ordenados y limpios mis cajones y oficina",
      "Cuido del automovil y/o casa, aunque no sean mías"
     ]
    }
   ]
  },
  {
   "name": "page7",
   "elements": [
    {
     "type": "matrix",
     "name": "Mi relación en familia",
     "columns": [
      "Nunca",
      "Casi Nunca",
      "Regularmente",
      "Casi Siempre",
      "Siempre"
     ],
     "rows": [
      "Siento que me falta tiempo para estar en familia",
      "Me refugio de mis problemas personales en el trabajo",
      "Tengo una situación deteriorada en mi familia que me preocupa",
      "Me pierdo eventos importantes en familia por darle prioridad al trabajo",
      "Mi cansancio  y falta de energía no me permite convivir con mi familia"
     ]
    }
   ]
  },
  {
   "name": "page8",
   "elements": [
    {
     "type": "radiogroup",
     "name": "Tienes pareja?",
     "choices": [
      "Si",
      "No"
     ]
    },
    {
     "type": "matrix",
     "name": "Mi relación con mi pareja",
     "visibleIf": "{Tienes pareja?} = \"Si\"",
     "columns": [
      "Nunca",
      "Casi Nunca",
      "Regularmente",
      "Casi Siempre",
      "Siempre"
     ],
     "rows": [
      "Me siento satisfecho con mi pareja",
      "La comunicación y pasión van en aumento",
      "Intimamente me siento complementado",
      "Me siento amado por mi pareja"
     ]
    },
    {
     "type": "matrix",
     "name": "Mi relación con mi pareja.",
     "visibleIf": "{Tienes pareja?} = \"No\"",
     "valueName": "Mi relación con mi pareja",
     "columns": [
      "Nunca",
      "Casi Nunca",
      "Regularmente",
      "Casi Siempre",
      "Siempre"
     ],
     "rows": [
      "Pienso que cuando mi negocio este bien me daré el tiempo de buscar una relación estable",
      "Quiero tener un compañero de vida, pero no se han dado las cosas"
     ]
    }
   ]
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
