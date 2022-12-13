import React from "react";

export const Login = () => {
    <div classname="mx-auto" style="width: 90%;" id="divforms">
        <form action="{{ route('logar') }}" method='POST'>

            <div className="form-group row">
                <div className="d-flex align-items-center justify-content-center">
                    <div className="d-flex flex-column my-5">
                        <div className="my-5">
                            <h1>Álbum de figurinhas</h1>
                            <h4>3º info 2022</h4>

                            <div className="my-3">
                                <div className="form-floating mb-3 my-5">
                                    <label>E-mail: </label>
                                    <input type="email" name="email" className="form-control" id="email" placeholder="nome@exemplo.com" value="" />

                                </div>
                                <div className="form-floating">
                                    <label>Senha: </label>
                                    <input type="password" name="password" className="form-control" id="password" placeholder="Senha" value="" />
                                </div>

                                <div className="d-grid gap-2 col-8 mx-auto">
                                    <button type="submit" id="btnlogin" className="btn btn my-3" style="background-color: #01497C; color:aliceblue">Conectar-se</button>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

        </form>
    </div>

}