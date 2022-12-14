import React, { useEffect, useState } from "react";
import { api } from "../api";
import { Figurinha } from "./figurinha";
import { FigurinhaColar } from "./figurinhaColar";
//figurinhas pra puxar pro album
export const FigColar = ({ figurinhas }) => {

  return (
        <div className="figurinhas_sweep">
            <div className="row">
                {figurinhas.map((figurinha) => {
                    return <FigurinhaColar key={figurinha.numero} data={figurinha} />;
                })}
            </div>
        </div>
  );
};
