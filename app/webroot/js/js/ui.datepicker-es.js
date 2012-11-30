jQuery(function($) {
$.datepicker.regional['es'] =
  {
    clearText: 'Borra',
    clearStatus: 'Borra fecha actual',
    closeText: 'Cerrar',
    closeStatus: 'Cerrar sin guardar',
    prevBigText: '<<',
    prevStatus: 'Mostrar mes anterior',
    prevBigStatus: 'Mostrar a\u00F1o anterior',
    nextText: 'Sig>',
    nextBigText: '>>',
    nextStatus: 'Mostrar mes siguiente',
    nextBigStatus: 'Mostrar a\u00F1o siguiente',
    currentText: 'Hoy',
    currentStatus: 'Mostrar mes actual',
    monthNames: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'],
    monthNamesShort: ['Ene', 'Feb', 'Mar', 'Abr', 'May', 'Jun', 'Jul', 'Ago', 'Sep', 'Oct', 'Nov', 'Dic'],
    monthStatus: 'Seleccionar otro mes',
    yearStatus: 'Seleccionar otro a\u00F1o',
    weekHeader: 'Sm',
    weekStatus: 'Semana del a\u00F1o',
    dayNames: ['Domingo', 'Lunes', 'Martes', 'Mi\u00E9rcoles', 'Jueves', 'Viernes', 'S\u00E1bado'],
    dayNamesShort: ['Dom', 'Lun', 'Mar', 'Mi\u00E9', 'Jue', 'Vie', 'Sáb'],
    dayNamesMin: ['Do', 'Lu', 'Ma', 'Mi', 'Ju', 'Vi', 'S\u00E1'],
    dayStatus: 'Set DD as first week day',
    dateStatus: 'Select D, M d',
    dateFormat: 'dd-mm-yy',
    firstDay: 1,
    initStatus: 'Seleccionar fecha',
    isRTL: false
  };

  $.datepicker.setDefaults($.datepicker.regional['es']);
});