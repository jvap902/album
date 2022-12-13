

import React from "react";

export const CreateFig = () => {
    return (
        <div>
            <form action="{{ route('storeFigurinha') }}" method="post" enctype="multipart/form-data">

                <div id="div_criarfig">
                    <div className="form-floating">
                        <label>
                            Nome
                            <input type="text" name="nome" class="form-control" id="nome" placeholder="Nome" value="" required />
                        </label>
                    </div>

                    {/* <div class="form-floating mb-3 my-5">
                    <label>
                        Data de nascimento
                        <input type="date" name="dtnasc" class="form-control" id="dtnasc" placeholder="dtnasc" value="" required />
                        </label>
                    </div>

                    <div class="form-floating mb-3 my-5">
                        <label>
                            Naturalidade
                        <input type="text" name="naturalidade" class="form-control" id="naturalidade" placeholder="naturalidade" value="" required />
                        </label>
                    </div>

                    <div class="form-floating mb-3 my-5">
                        <label for="floatingInput">
                            Número
                        <input type="number" name="numero" class="form-control" id="numero" placeholder="numero" value="" required />
                        </label>
                    </div>

                    <div>
                        <input name="file" class="form-control form-control-lg my-5" id="formFileLg" type="file" />
                    </div>

                    <div class="d-grid gap-2 col-8 mx-auto">
                        <button type="submit" id="criarfig" class="btn btn8 my-4" style="background-color: #01497C; color:aliceblue">Criar figurinha</button>
                        <a href="../listagem" id="voltar" class="btn btn8 my-1" style="background-color: #01497C; color:aliceblue">Voltar</a>
                    </div> */}
                </div>
            </form>
        </div>
    );
};