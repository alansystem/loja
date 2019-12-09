<script>
function formatar(mascara, documento){
  var i = documento.value.length;
  var saida = mascara.substring(0,1);
  var texto = mascara.substring(i);
  
  if (texto.substring(0,1) != saida){
            documento.value += texto.substring(0,1);
  }
  
}
 
function idade (){
    var data=document.getElementById("dtnasc").value;
    var dia=data.substr(0, 2);
    var mes=data.substr(3, 2);
    var ano=data.substr(6, 4);
    var d = new Date();
    var ano_atual = d.getFullYear(),
        mes_atual = d.getMonth() + 1,
        dia_atual = d.getDate();
        
        ano=+ano,
        mes=+mes,
        dia=+dia;
        
    var idade=ano_atual-ano;
    
    if (mes_atual < mes || mes_atual == mes && dia_atual < dia) {
        idade--;
    }
        
return idade;
} 
  
  
function exibe(i) {    
	document.getElementById(i).readOnly= true;  
}

function desabilita(i){
    
     document.getElementById(i).disabled = true;    
    }
function habilita(i)
    {
        document.getElementById(i).disabled = false;
    }

function showhide()
 {
    var div = document.getElementById('newpost');
    if(idade()>=18){
        div.style.display = 'none';
    }else if(idade()<18) {
    div.innerHTML = ' Menor de Idade ';
    div.style.display = 'block';
    }

}

</script>
<div class="container">
    <div class="row no-gutters">
        <div class="col-12 border my-4 rounded">
            <form class="form-group p-3" action="" method="">
                    <h4 class="text-center">Cadastro de Cliente</h4>
                    <p class="text-right"><h11>*</h11> Campo Obrigatório </p>
                
                    <hr>
                    <h5 class="text-center">Dados Pessoais</h5>
                    <hr />
                    <div class="form-group">
                        <div class="input-group col">
                            <div class="input-group-prepend">
                                <span class="input-group-text">Nome e sobrenome <h11> *</h11></span>
                            </div>
                            <input id="nome" name="nome" type="text" placeholder="Nome" aria-label="nome" class="form-control" required >
                            <input id="sobrenome" name="sobrenome" type="text" placeholder="Sobrenome" aria-label="sobrenome" class="form-control" required>
                        </div>
                    </div>
                    
                    <div class="form-inline mb-3">
                        <div class="input-group col-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text">CPF <h11> *</h11></span>
                            </div>
                            <input id="cpf" name="cpf" placeholder="Apenas números" class="form-control" required type="text" maxlength="14" pattern="[0-9]+$" OnKeyPress="formatar('###.###.###-##', this)">
                        </div>
                        
                        <div class="input-group col-4">
                            <div class="input-group-prepend">
                                <span class="input-group-text">Nascimento <h11> *</h11></span>
                            </div>
                            <input id="dtnasc" name="dtnasc" placeholder="DD/MM/AAAA" class="form-control input-md" required type="text" maxlength="10" OnKeyPress="formatar('##/##/####', this)" onkeyup='showhide()'>
                        </div>
                            <span class="text-danger" style="background-color:#f7c0bc; font-size: 12px; border-radius: 5px; " id="newpost"></span>
                        
                        <div class="input-group col-4 justify-content-end"> 
                            Sexo: <h11> *</h11>
                            <label class="form-check-label ml-3">
                                <input class="form-check-input mr-2" name="sexo" id="feminino" value="feminino" type="radio" required>
                                Feminino
                            </label> 
                            <label class="form-check-label ml-3">
                                <input class="form-check-input mr-2" name="sexo" id="masculino" value="masculino" type="radio" required>
                                Masculino
                            </label>
                        </div>
                    </div> 
                    <div class="form-inline mb-3">
                    
                        <div class="input-group col-4">
                            <div class="input-group-prepend">
                                <span class="input-group-text">Celular <h11> *</h11></span>
                            </div>
                            <input id="celular" name="celular" class="form-control" required placeholder="XX XXXXX-XXXX" type="tel" maxlength="13" pattern="\[0-9]{2}\[0-9]{4.6}-[0-9]{3.4}$"
                            OnKeyPress="formatar('## #####-####', this)">
                        </div>
                        <div class="input-group col-4">
                            <div class="input-group-prepend">
                                    <span class="input-group-text">Telefone</span>
                            </div>
                            <input id="telefone" name="telefone" class="form-control" placeholder="XX XXXX-XXXX" type="tel" maxlength="12" pattern="\[0-9]{2}\[0-9]{4.6}-[0-9]{3.4}$"
                            OnKeyPress="formatar('## ####-####', this)">
                        </div>
                    </div>

                    <!--
                    <div class="form-inline mb-3">
                        <div class="input-group col">
                            <div class="input-group-prepend">
                                <span class="input-group-text">Estado Cívil <h11> *</h11></span>
                            </div>
                            <select required id="Estado Civil" name="Estado Civil" class="form-control">
                                <option value=""></option>
                                <option value="Solteiro(a)">Solteiro(a)</option>
                                <option value="Casado(a)">Casado(a)</option>
                                <option value="Divorciado(a)">Divorciado(a)</option>
                                <option value="Viuvo(a)">Viuvo(a)</option>
                            </select>
                        </div>
                        <div class="input-group col">
                            <div class="input-group-prepend">
                                <span class="input-group-text">Escolaridade</span>
                            </div>
                            <select required id="escolaridade" name="escolaridade" class="form-control">
                                <option value=""></option>
                                <option value="Analfabeto">Analfabeto</option>
                                <option value="Fundamental Incompleto">Fundamental Incompleto</option>
                                <option value="Fundamental Completo">Fundamental Completo</option>
                                <option value="Médio Incompleto">Médio Incompleto</option>
                                <option value="Médio Completo">Médio Completo</option>
                                <option value="Superior Incompleto">Superior Incompleto</option>
                                <option value="Superior Completo">Superior Completo</option>
                            </select>
                        </div>
                    </div>
                    --> 
                    
                    <div class="form-inline mb-3">
                        <div class="input-group col-8">
                            <div class="input-group-prepend">
                                <span class="input-group-text">E-mail <h11> *</h11></span>
                            </div>
                            <input type="email" id="email" name="email" class="form-control" placeholder="email@email.com" required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2.4}$" autocomplete="off">
                        </div>
                    </div>
                    <div class="form-inline mb-3">
                        <div class="input-group col">
                            <div class="input-group-prepend">
                                <span class="input-group-text">Senha <h11> *</h11></span>
                            </div>
                            <input type="password" id="senha" name="senha" class="form-control" placeholder="Senha" required >
                        </div>
                        <div class="input-group col">
                            <div class="input-group-prepend">
                                <span class="input-group-text">Repetir Senha <h11> *</h11></span>
                            </div>
                            <input type="password" id="confirmsenha" name="confirmsenha" class="form-control" placeholder="Confirmar Senha" required />
                        </div>
                            <span class="col" id="message"></span>
                    </div>
                    <hr>
                    <h5 class="text-center">Endereço</h5>
                    <hr>
                    <div class="form-inline mb-3">
                        <div class="input-group col-auto">
                            <div class="input-group-prepend">
                                <span class="input-group-text">CEP <h11> *</h11></span>
                            </div>
                            <input id="cep" name="cep" placeholder="Apenas números" class="form-control input-md" required="" value="" type="search" maxlength="8" pattern="[0-9]+$"> 
                            <button type="button" class="btn btn-outline-primary ml-3" onclick="pesquisacep(cep.value)">Pesquisar</button>
                        </div>
                    </div>

                    <div class="form-inline mb-3">
                        <div class="input-group col">
                            <div class="input-group-prepend">
                                <span class="input-group-text">Rua <h11> *</h11></span>
                            </div>
                            <input id="rua" name="rua" class="form-control" required readonly="readonly" type="text">
                        </div>
                        <div class="input-group col-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text">Número <h11> *</h11></span>
                            </div>
                            <input id="numero" name="numero" class="form-control" required  type="number">
                        </div>                    
                    </div>
                    
                    <div class="form-inline mb-3">
                        <div class="input-group col">
                            <div class="input-group-prepend">
                                <span class="input-group-text">Bairro <h11> *</h11></span>
                            </div>
                                <input id="bairro" name="bairro" class="form-control" required readonly="readonly" type="text">
                        </div>
                        <div class="input-group col">
                            <div class="input-group-prepend">
                                <span class="input-group-text">Cidade <h11> *</h11></span>
                            </div>
                        <input id="cidade" name="cidade" class="form-control" required  readonly="readonly" type="text">
                        </div>
                        <div class="input-group col-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text">UF <h11> *</h11></span>
                            </div>
                            <input id="estado" name="estado" class="form-control" required  readonly="readonly" type="text">
                        </div>
                    </div>

                    <div class="form-inline mb-3 justify-content-center">
                        <div class="input-group col-auto p-0">
                            <button type="submit" class="btn btn-outline-success">Cadastrar</button>
                        </div>
                        <div class="input-group col-auto">
                            <button type="reset" class="btn btn-outline-danger">Cancelar</button>
                        </div>
                    </div>
            
            </form>
        </div>
    </div>
</div>