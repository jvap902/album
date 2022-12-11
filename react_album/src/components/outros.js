import React from "react";
import { CriarPacote } from "./criar_pacote";
import { FigColar } from "./fig_colar";
import { Nav } from "./nav";
import { Repetidas } from "./repetidas";

export const Outros = () => {
  return (
    <>
      <Nav />
      <div className="pacotes_figurinhas">
        <CriarPacote />
        <FigColar />
        <Repetidas />
      </div>
    </>
  );
};
