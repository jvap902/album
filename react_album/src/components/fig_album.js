// var f = await axios.get('link do arquivo', setFigurinha())
import React, { useState, useEffect } from "react";
import { api } from "../api";
import { Figurinha } from "./figurinha";
import isEmpty from "lodash/isEmpty";

export const FigAlbum = () => {
  const figurinhas = [
    { id: 1, num: 1, nome: "AAAAA", naturalidade: "Bento Gonçalves", dtnasc: "11/11/2011", img: "a", colada: 1 },
    { id: 2, num: 2, nome: "BBBBB", naturalidade: "Bento Gonçalves", dtnasc: "12/12/2012", img: "15-4020", colada: 0 },
  ];

  const [figCol, setFigCol] = useState([]);
  const [figAl, setFigAl] = useState([]);

  useEffect(() => {
    const load = async () => {
      const r = await api.get("/infoFigurinhas");
      // console.log(r.data);

      setFigAl(r.data[0]);
      setFigCol(r.data[1]);
    };

    load();
  }, []);

  return (
    <div className="div_album">
      <div className="row">
        {figAl.map((figA) => {
          if (!isEmpty(figCol)) {
            figCol.map((figC, index) => {
              if (figC.numero == figA.numero) {
                return <Figurinha key={figC.numero} data={figC} />;
              } else if (figCol.length == index + 1) {
                return <Figurinha key={figA.numero} data={figA} />;
              }
            });
          } else {
            return <Figurinha key={figA.numero} data={figA} />;
          }
        })}
      </div>
    </div>
  );
};
