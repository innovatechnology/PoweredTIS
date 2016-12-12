<div class="panel-heading">Materias Detallado</div>

                     <div class="panel-body">
                            <p>Horario</p>
                             <div class ="form-group{}">
                            <lavel for= "grupo" class="col-md-0 control-lavel"></lavel>
                                <div class="col-md-2">
                                <select class="form-control" id="dia">
                                <label for="nombre" class="col-md-4 control-label">Dia</label>
                                    <option selected="selected" disabled="disabled">dia</option>
                                    <option>Lunes</option>
                                    <option>Martes</option>
                                    <option>Miercoles</option>
                                    <option>Jueves</option>
                                    <option>Viernes</option>
                                    <option>Sabado</option>
                                </select>
                            </div>
                            </div>
                                <div class="col-md-4">
                                <select class="form-control" id="hora">
                                <label for="nombre" class="col-md-4 control-label">horaInicio</label>
                                    <option selected="selected" disabled="disabled">hora Inicio</option>
                                    <option>6:45</option>
                                    <option>8:15</option>
                                    <option>9:45</option>
                                    <option>11:15</option>
                                    <option>12:45</option>
                                    <option>14:15</option>
                                </select>
                            </div>
                            <div class="col-md-4">
                                <select class="form-control" id="dia">
                                <label for="nombre" class="col-md-0 control-label">hora Fin</label>
                                    <option selected="selected" disabled="disabled">hora Fin</option>
                                   
                                    <option>8:15</option>
                                    <option>9:45</option>
                                    <option>11:15</option>
                                    <option>12:45</option>
                                    <option>14:15</option>
                                </select>
                            </div>

                            <div class="form-group{}">
                           
                            

                            <div class="col-md-2">
                            <label for="Aula" class="col-md-6 control-label">Aula</label>
                                <input id="aula" type="text" class="form-control" name="Aula" value="{{ old('Aula') }}" required autofocus>
                                
                                        
                                            
                               
                            </div>
                        </div>

                           <div class="form-group{}">
                            <label for="diploma" class="col-md-1 control-label">Hrs. Semana</label>

                            <div class="col-md-1">
                                <input id="" type="text" class="form-control" name="" value="{{ old('') }}" required autofocus>

                                @if ($errors->has(''))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{}">
                            <label for="diploma" class="col-md-1 control-label">Hrs.Teoria Mes</label>

                            <div class="col-md-1">
                                <input id="" type="text" class="form-control" name="" value="{{ old('') }}" required autofocus>

                                @if ($errors->has(''))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                       <div class="form-group{}">
                            <label for="diploma" class="col-md-1 control-label">Hrs.Practica Mes</label>

                            <div class="col-md-1">
                                <input id="" type="text" class="form-control" name="" value="{{ old('') }}" required autofocus>

                                @if ($errors->has(''))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                         <div class="form-group{}">
                            <label for="diploma" class="col-md-1 control-label">Hrs.Mes de la Materia</label>

                            <div class="col-md-1">
                                <input id="" type="text" class="form-control" name="" value="{{ old('') }}" required autofocus>

                                @if ($errors->has(''))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                         <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Registrar Materia
                                </button>
                            </div>
                        </div>
                       </div>
                    <div class="panel-heading"></div>
                    </form>
            </div>
        </div>