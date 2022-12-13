import React from "react";
import { FigurinhaColar } from "./figurinhaColar";

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
