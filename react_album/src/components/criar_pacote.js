import axios from "axios";
import React, { useState } from "react";
import { api } from "../api";

export const CriarPacote = () => {

  // const route_form = api.get("/login");
  
  const abrir = async () => {
    const pacote = await axios.get("http://127.0.0.1:8000/pacote/create");
    window.location.reload();
  };

  return (
    <div name="figurinhas" className="pacote">
        <button onClick={abrir} className="btn_gerar_pacote">Gerar Pacote</button>
    </div>
  );
};
