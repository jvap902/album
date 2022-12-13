import React from "react";
import { api } from "../api";

export const CriarPacote = () => {
  const route_form = api.get("/login");
  const route_btn = api.get("/pacote/create");
  console.log(route_btn)
  return (
    <div name="figurinhas" className="pacote">
      <form action={route_form} method="POST">
        <button href={route_btn} className="btn_gerar_pacote">Gerar Pacote</button>
      </form>
    </div>
  );
};
