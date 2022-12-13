import axios from "axios";
import React, { useState } from "react";
import { api } from "../api";

export const CriarPacote = () => {

  // const route_form = api.get("/login");
  
  const abrir = async () => {
    const pacote = await axios.get("http://127.0.0.1:8000/pacote/create");
    console.log(pacote)
  };

  return (
    <div name="figurinhas" className="pacote">
      {/* <form action={route_form} method="POST"> */}
        <button onClick={abrir} className="btn_gerar_pacote">Gerar Pacote</button>
      {/* </form> */}
    </div>
  );
};
