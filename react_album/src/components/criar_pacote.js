import React from "react";
import { api } from "../api";

export const CriarPacote = () => {
  const route_form = api.get("/login");
  const pacote = api.get("/pacote/create");
  console.log(pacote)
  return (
    <div name="figurinhas" className="pacote">
      <form action={route_form} method="POST">
        <button href={pacote} className="btn_gerar_pacote">Gerar Pacote</button>
      </form>
    </div>
  );
};
