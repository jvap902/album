// var f = await axios.get('link do arquivo', setFigurinha())
import React from "react";
import { Figurinha } from "./figurinha";

export const FigAlbum = ({ figAl, colaFigurinha, setFigAl }) => {
    return (
        <div className="div_album">
            <div className="row">
                {figAl.map((figA) => {
                    return figA.colada === 1
                        ? <Figurinha key={figA.numero} data={figA} />
                        : <Figurinha setFigAl={setFigAl} colaFigurinha={colaFigurinha} key={figA.numero} data={figA} />;
                })}
            </div>
        </div>
    );
};
