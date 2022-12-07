// var f = await axios.get('link do arquivo', setFigurinha())
import React, { useState, useEffect } from "react";

import { api } from '../api'
import { Figurinha } from "./figurinha";

export const FigAlbum = () => {
  const figurinhas = [
    { id:1, num: 1, nome: "AAAAA", naturalidade: "Bento Gonçalves", dtnasc: "11/11/2011", img: "15-4020", colada: 1 },
    { id:2, num: 2, nome: "BBBBB", naturalidade: "Bento Gonçalves", dtnasc: "12/12/2012", img: "15-4020", colada: 0 },
  ];

  /* const [fig, setFig] = useState([]);

  useEffect(() => {
    const load = async () => {
      const r = await api.get("/");

      console.log(r.data)
      setFig(r.data);
    };

    load();
  }, []); */

  return (
    <div className="div_album">
      <div className="row">
        {figurinhas.map((figurinha) => (
          <Figurinha key={figurinha.num} data={figurinha} />
        ))}
      </div>
    </div>
  );
};
