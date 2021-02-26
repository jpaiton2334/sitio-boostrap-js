var app = new Vue({ 
    el: '#app',
    data: {
        message: 'Hello Vue!'
    }
});

app.message = 'aqui debe ir el codigo html de demostracion';

var formulario = new Vue({
    el :'#form',
    data:{
        message: 'aqui iria el form'
    }
});

var app3 = new Vue({
    el: '#app-3',
    data: {
      seen: true
    }
  })




  var app5 = new Vue({
    el: '#app-5',
    data: {
      message: 'codigo html'
     
      
      
    },
    methods: {
      mostrar: function mostrar() {
        document.getElementById('app-5').style.display = 'block';
     
       
       
      }
    }
  })

 