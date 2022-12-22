 <!-- Begin Page Content -->
 <div class="container-fluid">

     <!-- Page Heading -->
     <h1 class="h3 mb-2 text-gray-800"><?php echo company; ?></h1>

     <div class="d-sm-flex align-items-center justify-content-between mb-3">
         <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm" data-toggle="modal" data-target="#exampleModal2"> Registrar Dispositivo</a>
         <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
     </div>
     <!-- DataTales Example -->
     <div class="card shadow mb-4">
         <div class="card-header py-3">
             <h6 class="m-0 font-weight-bold text-primary">Lista de Dispositivos</h6>
         </div>
         <div class="card-body">
             <div class="table-responsive">
                 <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                     <thead>
                         <tr>
                             <th>Tipo de dispositivo</th>
                             <th>Serial del equipo</th>
                             <th>Serial del Cargador</th>
                             <th>Pertenencia del equipo</th>
                             <th>Institución educativa</th>
                             <th>Grado o Año de (Entrega)</th>
                             <th>Institución donde estudia</th>
                             <th>Grado o Año de (Actual)</th>
                             <th>Estado</th>
                             <th>Motivo</th>
                             <th>Fecha de Entrega</th>
                             <th>Observaciones</th>
                             <th>Equipo reincidio</th>
                             <th>Motivo de Reincidencia</th>
                             <th>Opciones</th>
                         </tr>
                     </thead>
                     <tbody>
                     <tr>
                                <td>Tiger Nixon</td>
                                <td>System Architect</td>
                                <td>Edinburgh</td>
                                <td>61</td>
                                <td>2011/04/25</td>
                                <td>$320,800</td>
                                <td>asd</td>
                                <td>asdas</td>
                                <td>asd</td>
                                <td>addslashes</td>
                                <td>asada</td>
                                <td>asdas</td>
                                <td>asda</td>
                                <td>asdsa</td>
                                <td>
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                            Options
                                        </button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item btn btn-warning" data-toggle="modal" data-target="#ModalEditar" href="#"><img src="<?php SERVERURL; ?>view/img/svg/editar.svg " alt="Industrias Canaima" width="15" height="15"> Editar</a>
                                        <a class="dropdown-item btn btn-danger" href="#"><img src="<?php SERVERURL; ?>view/img/svg/eliminar.svg " alt="Industrias Canaima" width="15" height="15"> Eliminar</a>
                                    </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>Garrett Winters</td>
                                <td>Accountant</td>
                                <td>Tokyo</td>
                                <td>63</td>
                                <td>2011/07/25</td>
                                <td>$170,750</td>
                                <td>asd</td>
                                <td>asdas</td>
                                <td>asd</td>
                                <td>addslashes</td>
                                <td>asada</td>
                                <td>asdas</td>
                                <td>asda</td>
                                <td>asdsa</td>
                                <td>
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                            Options
                                        </button>
                                    <div class="dropdown-menu">
                                    <a class="dropdown-item btn btn-warning" data-toggle="modal" data-target="#ModalEditar" href="#"><img src="<?php SERVERURL; ?>view/img/svg/editar.svg " alt="Industrias Canaima" width="15" height="15"> Editar</a>
                                        <a class="dropdown-item btn btn-danger" href="#"><img src="<?php SERVERURL; ?>view/img/svg/eliminar.svg " alt="Industrias Canaima" width="15" height="15"> Eliminar</a>
                                    </div>
                                    </div>
                                </td>
                            </tr>
                         
                     </tbody>
                 </table>
             </div>
         </div>
     </div>
     <div class="d-sm-flex align-items-center justify-content-end mb-3">
         <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
     </div>
     <!-- DataTales Example -->
     <div class="card shadow mb-4">
         <div class="card-header py-3">
             <h6 class="m-0 font-weight-bold text-primary">Lista de Datos del entregante</h6>
         </div>
         <div class="card-body">
             <div class="table-responsive">
                 <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                     <thead>
                         <tr>
                             <th>IC</th>
                             <th>Nombre del Beneficiario</th>
                             <th>Cédula</th>
                             <th>Edad</th>
                             <th>Sexo</th>
                             <th>Fecha de Nacimiento</th>
                             <th>Unidad de Adcripcion</th>
                             <th>Area</th>
                             <th>Cargo</th>
                             <th>Nombre del Representante</th>
                             <th>Correo</th>
                             <th>Telefono</th>
                             <th>Estado</th>
                             <th>Municipio</th>
                             <th>Dirección</th>
                             <th>Nombre del Consejo Comunal</th>
                             <th>Discapacidad</th>
                             <th>Opciones</th>
                         </tr>
                     </thead>
                     <tbody>
                         <tr>
                             <td>Tiger Nixon</td>
                             <td>System Architect</td>
                             <td>Edinburgh</td>
                             <td>61</td>
                             <td>2011/04/25</td>
                             <td>$320,800</td>
                             <td>asd</td>
                             <td>asd</td>
                             <td>sda</td>
                             <td>asds</td>
                             <td>asd</td>
                             <td>ads</td>
                             <td>asd</td>
                             <td>das</td>
                             <td>asd</td>
                             <td>addslashes</td>
                             <td>addslashes</td>
                             <td>
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                            Options
                                        </button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item btn btn-warning" href="#"><img src="<?php SERVERURL; ?>view/img/svg/editar.svg " alt="Industrias Canaima" width="15" height="15"> Editar</a>
                                        <a class="dropdown-item btn btn-danger" href="#"><img src="<?php SERVERURL; ?>view/img/svg/eliminar.svg " alt="Industrias Canaima" width="15" height="15"> Eliminar</a>
                                    </div>
                                    </div>
                                </td>
                         </tr>
                         
                     </tbody>
                 </table>
             </div>
         </div>
     </div>
     <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
         <div class="modal-dialog modal-dialog-scrollable">
             <div class="modal-content">
                 <div class="modal-header">
                     <h5 class="modal-titlen text-dark mx-auto" id="exampleModalLabel">Datos del Dispositivo</h5>
                     <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                         <span aria-hidden="true">&times;</span>
                     </button>
                 </div>
                 <div class="modal-body">
                     <form name="dispositivo" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST" class="">
                         <div class="form-group">
                             <label for="tipoDeDispositivo">tipo De Dispositivo</label>
                             <select name="tipoDispositivo" id="" class="form-control form-control-lg">
                                 <option value="1">Table 1</option>
                                 <option value="2">Table 2</option>
                                 <option value="3">Canaima 1</option>
                                 <option value="4">Canaima 2</option>
                                 <option value="5">Canaima 3</option>
                                 <option value="6">Canaima 4</option>
                                 <option value="7">Canaima 5</option>
                                 <option value="8">Canaima Docente</option>
                             </select>
                         </div>
                         <div class="form-group">
                             <label for="exampleInputUser1">Serial del Equipo</label>
                             <input type="text" class="form-control" id="exampleInputUser1" aria-describedby="nameHelp" name="serialEntrada">
                         </div>
                         <div class="form-group">
                             <label for="exampleInputPassword1">Serail del Cargador</label>
                             <input type="text" class="form-control" id="exampleInputCedula1" name="serialCargadorE">
                         </div>
                         <div class="form-group">
                             <label for="exampleInputEmail1">Pertenecnia del Equipo</label>
                             <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="pertenencia">
                         </div>
                         <div class="form-group">
                             <label for="exampleInputEmail1">Insitución Educativa</label>
                             <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="institucionEdu">
                         </div>
                         <div class="form-group">
                             <label for="Estado">Grado O Año (Entrega)</label>
                             <select name="gradoYears" id="" class="form-control form-control-lg">
                                 <option value="1">1° Grado</option>
                                 <option value="2">2° Grado</option>
                                 <option value="3">3° Grado</option>
                                 <option value="4">4° Grado</option>
                                 <option value="5">5° Grado</option>
                                 <option value="6">6° Grado</option>
                                 <option value="7">1° Año</option>
                                 <option value="8">2° Año</option>
                                 <option value="9">3° Año</option>
                                 <option value="10">4° Año</option>
                                 <option value="11">5° Año</option>
                             </select>
                         </div>
                         <div class="form-group">
                             <label for="exampleInputEmail1">Institución Donde Estudia</label>
                             <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="instituciónEstu">
                         </div>
                         <div class="form-group">
                             <label for="Estado">Grado O Año (Actual)</label>
                             <select name="gradoYears" id="" class="form-control form-control-lg">
                                 <option value="1">1° Grado</option>
                                 <option value="2">2° Grado</option>
                                 <option value="3">3° Grado</option>
                                 <option value="4">4° Grado</option>
                                 <option value="5">5° Grado</option>
                                 <option value="6">6° Grado</option>
                                 <option value="7">1° Año</option>
                                 <option value="8">2° Año</option>
                                 <option value="9">3° Año</option>
                                 <option value="10">4° Año</option>
                                 <option value="11">5° Año</option>
                                 <option value="12">Egresado</option>
                             </select>
                         </div>
                         <div class="form-group">
                             <label for="Estado">Estado</label>
                             <select name="Estado" id="" class="form-control form-control-lg">
                                 <option value="1">Excelente</option>
                                 <option value="2">Bueno</option>
                                 <option value="3">Regular</option>
                                 <option value="4">Malo</option>
                                 <option value="5">Muy Malo</option>
                             </select>
                         </div>
                         <div class="form-group">
                             <label for="exampleInputEmail1">Motivo</label>
                             <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="motivo"></textarea>
                         </div>
                         <div class="form-group">
                             <label for="exampleInputEmail1">Fecha De Entrega</label>
                             <input type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="fechaDeEntrega">
                         </div>
                         <br>
                         <div class="form-group">
                             <label for="exampleFormControlTextarea1">Obervaciones</label>
                             <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="obervaciones"></textarea>
                         </div>
                         <hr>
                         <label for="exampleInputEmail1">Equipo Reincidio</label>
                         <div class="form-check">
                             <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                             <label class="form-check-label" for="exampleRadios1">
                                 Si
                             </label>
                         </div>
                         <div class="form-check">
                             <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
                             <label class="form-check-label" for="exampleRadios2">
                                 No
                             </label>
                         </div>
                         <!-- <hr> -->
                         <br>
                         <div class="form-group">
                             <label for="exampleFormControlTextarea1">Motivo de la Reincidencia</label>
                             <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                         </div>
                         <hr>
                         <h5 class="modal-titlen text-dark mx-auto" id="exampleModalLabel">Datos del Entregante</h5>
                         <hr>
                         <div class="form-group">
                             <label for="exampleInputUser1">IC</label>
                             <input type="text" class="form-control" id="exampleInputUser1" aria-describedby="nameHelp" name="txtIC">
                         </div>
                         <div class="form-group">
                             <label for="exampleInputUser1">Nombre Del Beneficiario</label>
                             <input type="text" class="form-control" id="exampleInputUser1" aria-describedby="nameHelp" name="nombreBene">
                         </div>
                         <div class="form-group">
                             <label for="exampleInputUser1">Cédula</label>
                             <input type="text" class="form-control" id="exampleInputUser1" aria-describedby="nameHelp" name="cedulaBene">
                         </div>
                         <div class="form-group">
                             <label for="exampleInputUser1">Edad</label>
                             <input type="text" class="form-control" id="exampleInputUser1" aria-describedby="nameHelp" name="edad">
                         </div>
                         <label for="exampleInputEmail1">Equipo Reincidio</label>
                         <div class="form-check">
                             <input class="form-check-input" type="radio" name="generoRadios" id="generoRadios1" value="genero1" checked>
                             <label class="form-check-label" for="exampleRadios1">
                                 Masculino
                             </label>
                         </div>
                         <div class="form-check">
                             <input class="form-check-input" type="radio" name="generoRadios" id="generoRadios2" value="genero2">
                             <label class="form-check-label" for="exampleRadios2">
                                 Femenino
                             </label>
                         </div>
                         <br>
                         <div class="form-group">
                             <label for="exampleInputEmail1">Fecha De Nacimiento</label>
                             <input type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="fechaDeEntrega">
                         </div>
                         <div class="form-group">
                             <label for="exampleInputUser1">Unidad de Adcripción</label>
                             <input type="text" class="form-control" id="exampleInputUser1" aria-describedby="nameHelp" name="unidadAdcrip">
                         </div>
                         <div class="form-group">
                             <label for="exampleInputUser1">Area</label>
                             <input type="text" class="form-control" id="exampleInputUser1" aria-describedby="nameHelp" name="txtarea">
                         </div>
                         <div class="form-group">
                             <label for="exampleInputUser1">Cargo</label>
                             <input type="text" class="form-control" id="exampleInputUser1" aria-describedby="nameHelp" name="txtcargo">
                         </div>
                         <div class="form-group">
                             <label for="exampleInputUser1">Nombre del Representante</label>
                             <input type="text" class="form-control" id="exampleInputUser1" aria-describedby="nameHelp" name="nombreRepre">
                         </div>
                         <div class="form-group">
                             <label for="exampleInputUser1">Correo</label>
                             <input type="email" class="form-control" id="exampleInputUser1" aria-describedby="nameHelp" name="correoRepre">
                         </div>
                         <div class="form-group">
                             <label for="exampleInputUser1">Teléfono</label>
                             <input type="text" class="form-control" id="exampleInputUser1" aria-describedby="nameHelp" name="phoneRepre">
                         </div>
                         <div class="form-group">
                             <label for="exampleInputUser1">Estado</label>
                             <input type="text" class="form-control" id="exampleInputUser1" aria-describedby="nameHelp" name="estadoVene">
                         </div>
                         <div class="form-group">
                             <label for="exampleInputUser1">Municipio</label>
                             <input type="text" class="form-control" id="exampleInputUser1" aria-describedby="nameHelp" name="municipio">
                         </div>
                         <div class="form-group">
                             <label for="exampleFormControlTextarea1">Dirección</label>
                             <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="adress"></textarea>
                         </div>
                         <div class="form-group">
                             <label for="exampleInputUser1">Nombre del Consejo Comunal</label>
                             <input type="text" class="form-control" id="exampleInputUser1" aria-describedby="nameHelp" name="consejoComunal">
                         </div>
                         <label for="exampleInputEmail1">Posee alguna Discapacidad o Condición</label>
                         <div class="form-check">
                             <input class="form-check-input" type="radio" name="discapacidadRadios" id="discapacidadRadios1" value="discapacidad1" checked>
                             <label class="form-check-label" for="exampleRadios1">
                                 Si
                             </label>
                         </div>
                         <div class="form-check">
                             <input class="form-check-input" type="radio" name="discapacidadRadios" id="discapacidadRadios2" value="discapacidad2">
                             <label class="form-check-label" for="exampleRadios2">
                                 No
                             </label>
                         </div>
                         <br>
                         <div class="form-group">
                             <label for="exampleFormControlTextarea1">Especifique</label>
                             <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="condicionEspeci"></textarea>
                         </div>
                         <br>
                         <div class="form-group">
                             <label for="exampleInputUser1">Jornadas</label>
                             <input type="text" class="form-control" id="exampleInputUser1" aria-describedby="nameHelp" name="jornadas">
                         </div>
                         <button type="submit" class="btn btn-success">Enviar</button>
                         <button type="reset" class="btn btn-danger">Refrescar</button>
                     </form>
                 </div>
             </div>
         </div>
     </div>
 </div>
 <!-- Modal editar -->
<div class="modal fade" id="ModalEditar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Editar Registro</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
                     <form name="dispositivo" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST" class="">
                         <div class="form-group">
                             <label for="tipoDeDispositivo">tipo De Dispositivo</label>
                             <select name="tipoDispositivo" id="" class="form-control form-control-lg">
                                 <option value="1">Table 1</option>
                                 <option value="2">Table 2</option>
                                 <option value="3">Canaima 1</option>
                                 <option value="4">Canaima 2</option>
                                 <option value="5">Canaima 3</option>
                                 <option value="6">Canaima 4</option>
                                 <option value="7">Canaima 5</option>
                                 <option value="8">Canaima Docente</option>
                             </select>
                         </div>
                         <div class="form-group">
                             <label for="exampleInputUser1">Serial del Equipo</label>
                             <input type="text" class="form-control" id="exampleInputUser1" aria-describedby="nameHelp" name="serialEntrada">
                         </div>
                         <div class="form-group">
                             <label for="exampleInputPassword1">Serail del Cargador</label>
                             <input type="text" class="form-control" id="exampleInputCedula1" name="serialCargadorE">
                         </div>
                         <div class="form-group">
                             <label for="exampleInputEmail1">Pertenecnia del Equipo</label>
                             <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="pertenencia">
                         </div>
                         <div class="form-group">
                             <label for="exampleInputEmail1">Insitución Educativa</label>
                             <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="institucionEdu">
                         </div>
                         <div class="form-group">
                             <label for="Estado">Grado O Año (Entrega)</label>
                             <select name="gradoYears" id="" class="form-control form-control-lg">
                                 <option value="1">1° Grado</option>
                                 <option value="2">2° Grado</option>
                                 <option value="3">3° Grado</option>
                                 <option value="4">4° Grado</option>
                                 <option value="5">5° Grado</option>
                                 <option value="6">6° Grado</option>
                                 <option value="7">1° Año</option>
                                 <option value="8">2° Año</option>
                                 <option value="9">3° Año</option>
                                 <option value="10">4° Año</option>
                                 <option value="11">5° Año</option>
                             </select>
                         </div>
                         <div class="form-group">
                             <label for="exampleInputEmail1">Institución Donde Estudia</label>
                             <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="instituciónEstu">
                         </div>
                         <div class="form-group">
                             <label for="Estado">Grado O Año (Actual)</label>
                             <select name="gradoYears" id="" class="form-control form-control-lg">
                                 <option value="1">1° Grado</option>
                                 <option value="2">2° Grado</option>
                                 <option value="3">3° Grado</option>
                                 <option value="4">4° Grado</option>
                                 <option value="5">5° Grado</option>
                                 <option value="6">6° Grado</option>
                                 <option value="7">1° Año</option>
                                 <option value="8">2° Año</option>
                                 <option value="9">3° Año</option>
                                 <option value="10">4° Año</option>
                                 <option value="11">5° Año</option>
                                 <option value="12">Egresado</option>
                             </select>
                         </div>
                         <div class="form-group">
                             <label for="Estado">Estado</label>
                             <select name="Estado" id="" class="form-control form-control-lg">
                                 <option value="1">Excelente</option>
                                 <option value="2">Bueno</option>
                                 <option value="3">Regular</option>
                                 <option value="4">Malo</option>
                                 <option value="5">Muy Malo</option>
                             </select>
                         </div>
                         <div class="form-group">
                             <label for="exampleInputEmail1">Motivo</label>
                             <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="motivo"></textarea>
                         </div>
                         <div class="form-group">
                             <label for="exampleInputEmail1">Fecha De Entrega</label>
                             <input type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="fechaDeEntrega">
                         </div>
                         <br>
                         <div class="form-group">
                             <label for="exampleFormControlTextarea1">Obervaciones</label>
                             <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="obervaciones"></textarea>
                         </div>
                         <hr>
                         <label for="exampleInputEmail1">Equipo Reincidio</label>
                         <div class="form-check">
                             <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                             <label class="form-check-label" for="exampleRadios1">
                                 Si
                             </label>
                         </div>
                         <div class="form-check">
                             <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
                             <label class="form-check-label" for="exampleRadios2">
                                 No
                             </label>
                         </div>
                         <!-- <hr> -->
                         <br>
                         <div class="form-group">
                             <label for="exampleFormControlTextarea1">Motivo de la Reincidencia</label>
                             <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                         </div>
                         <hr>
                         <button type="submit" class="btn btn-success">Enviar</button>
                         <button type="reset" class="btn btn-danger">Refrescar</button>
                     </form>
                 </div>
    </div>
  </div>
</div>
 <!-- /.container-fluid -->