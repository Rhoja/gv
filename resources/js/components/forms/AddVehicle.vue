<template>
<<<<<<< HEAD
 <div class="container" id="addVehicle">
=======
 <div class="container">
>>>>>>> e6dd4d935c19918535be295b6f50910fd232ee72
    <div class="row">
        <div class="col">
            <div id="desc_form">
                <div class="container">
                    <div class="row justify-content-between">
                        <h3 class="text-left">
                            <i class="fas fa-car"></i>
<<<<<<< HEAD
                                 Nuevo Ingreso Vehiculo </h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
   <!-- Columna1/3-->
    <div iv class="row lpad" >
        <div class="col-md-4 "     >
            <label for="empresa">Empresa</label>
            <input type=text class="form-control" placeholder="Empresa" v-model="empresa">
        </div>
        <div class="col-md-4">
            <label for="marca">Marca</label>
            <input type="text" class="form-control" id=marca placeholder="Marca" v-model="marca">
        </div><div class="col-md-4">
            <label for="modelo">Modelo</label>
            <input type="text" class="form-control" id=modelo placeholder="Modelo" v-model="modelo">
=======
                                 Nuevo Ingreso Vehiculo </h3>   
                    </div>                                                      
                </div>                
            </div>
        </div>     
    </div> 
   <!-- Columna1/3-->       
    <div iv class="row lpad" >
        <div class="col-md-4 "     >
            <label for="empresa">Empresa</label>
            <input type="text" class="form-control" id=empresa placeholder="Empresa">   
        </div>
        <div class="col-md-4">
            <label for="marca">Marca</label>
            <input type="text" class="form-control" id=marca placeholder="Marca">
        </div><div class="col-md-4">
            <label for="modelo">Modelo</label>
            <input type="text" class="form-control" id=modelo placeholder="Modelo">
>>>>>>> e6dd4d935c19918535be295b6f50910fd232ee72
        </div>
    </div>
    <div iv class="row lpad" >
        <div class="col-md-4">
            <label for="serie">Serie</label>
<<<<<<< HEAD
            <input type="text" class="form-control" id=serie placeholder="Serie" v-model="serie">
        </div>
        <div class="col-md-4">
            <label for="placa2">Placa</label>
            <input type="text" class="form-control" id=placa2 placeholder="Placa" v-model="placa">
        </div><div class="col-md-4">
            <label for="tcirc">T.Circulacion</label>
            <input type="text" class="form-control" id=tcirc placeholder="T.Circulación" v-model="circula">
        </div>
    </div>
    <div iv class="row lpad" >
        <div class="col-md">
            <label for="capacidad">Capacidad</label>
            <input type="text" class="form-control" id=capacidad placeholder="Capacidad" v-model="capacidad">
        </div>
        <div class="col-md">
            <label for="motor1">Motor</label>
            <select class="custom-select" id=motor1 v-model= "smotor">
                <option v-for= "moto in smotor" v-bind:key= "moto.value">
                    {{ moto.text }}
                </option>
=======
            <input type="text" class="form-control" id=serie placeholder="Serie">
        </div>
        <div class="col-md-4">
            <label for="placa">Placa</label>
            <input type="text" class="form-control" id=placa placeholder="Placa">
        </div><div class="col-md-4">
            <label for="tcirc">T.Circulacion</label>
            <input type="text" class="form-control" id=tcirc placeholder="T.Circulación">
        </div>
    </div> 
    <div iv class="row lpad" >
        <div class="col-md">
            <label for="capacidad">Capacidad</label>
            <input type="text" class="form-control" id=capacidad placeholder="Capacidad">
        </div>
        <div class="col-md">
            <label for="motor">Motor</label>
            <select class="custom-select" id=motor>
                <option selected>Motores</option>
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
>>>>>>> e6dd4d935c19918535be295b6f50910fd232ee72
            </select>
        </div>
        <div class="col-md">
            <label for="ejes">Ejes</label>
<<<<<<< HEAD
            <select class="form-control" id=ejes v-model= "sejes">
                <option v-for= "eje in sejes" v-bind:key= "eje.value" >
                   {{ eje.text }}
                </option>
            </select>

        </div>
        <div class="col-md">
            <label for="serv">Servicios</label>
            <select class="custom-select" id=serv v-model= "sserv">
                <option v-for= "serv in sserv" v-bind:key= "serv.value" >
                     {{ serv.text }}
                </option>
            </select>
        </div>
    </div>
    <div iv class="row justify-content-center">
        <div class="col-md-4">
        <a class="btn  btn-guarda btn-outline-primary btn-lg">Guardar</a>
        </div>
    </div>

</div>

</template>

<script>
import EvenBus from '../../even-bus'

export default{

data(){
        return{

            empresa:'',
            marca:'',
            modelo:'',
            serie:'',
            placa:'',
            circula:'',
            capacidad:'',
            smotor: [ { text: 'One', value: '1' },
                  { text: 'Two', value: '2' },
                  { text: 'Three', value: '3' }],

            sejes: [],

            sserv:[{ text: 'One', value: '1' },
                  { text: 'Two', value: '2' },
                  { text: 'Three', value: '3' }]
        }


    },

    mounted(){
       axios.get('http://127.0.0.1:8000/axes')
        .then(response => (this.sejes = response.data))
        console.log(response);
        }
}
           // console.log(response.data);

/*const axios = require('axios');

// Make a request for a user with a given ID
 axios.get('http://127.0.0.1:8000/axes')
.then(function (response) {
    // handle success
    console.log(response);
    this.sejes = response.data;
     return sejes;
  })
  .catch(function (error) {
    // handle error
    console.log(error);
  })
  .then(function () {
    // always executed

  })*/
=======
            <select class="custom-select" id=ejes>
                <option selected>Ejes</option>
                <option value="1">One</option>
                <option value="2">Two</option>
                </select> 
                </div>
        <div class="col-md">
            <label for="serv">Servicios</label>
            <select class="custom-select" id=serv>
                <option selected>Servicios</option>
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
            </select>
        </div>
    </div> 
    <div iv class="row justify-content-center"> 
        <div class="col-md-4">                              
        <a class="btn  btn-guarda btn-outline-primary btn-lg">Guardar</a>
        </div>                    
    </div> 
</div>
   
</template>

<script>
>>>>>>> e6dd4d935c19918535be295b6f50910fd232ee72

</script>

<style scope>
#app {
  font-family: 'Avenir', Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: #2c3e50;
}

.btn-guarda {
  padding: 5%;
  margin-top: 5%;
}

.lpad {
  padding-top: 4%;
  text-align: left;
  padding-left: 4%;
}
</style>
