import React from "react";
import {Figurinha} from "./figurinha"

export const Repetidas = () => {
    const data = {id:999999, numero: "Repetidas", nome: "00000", naturalidade: "000000", dtnasc: "000000", img: "0", colada: 0}
  return (
    <div className="repetidas">
      <Figurinha key="0" data={data}/>
    </div>
  );
};
