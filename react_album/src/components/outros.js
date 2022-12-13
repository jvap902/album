import React from "react";
import { CriarPacote } from "./criar_pacote";
import { FigColar } from "./fig_colar";
import { Nav } from "./nav";
import { Repetidas } from "./repetidas";

export const Outros = ({figurinhas, colaFigurinha}) => {
  return (
    <>
      <Nav />
      <div className="pacotes_figurinhas">
        <CriarPacote />
        <Repetidas />
        <FigColar figurinhas={figurinhas} colaFigurinha={colaFigurinha}  />
      </div>
    </>
  );
};
