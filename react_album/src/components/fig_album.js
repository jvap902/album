// var f = await axios.get('link do arquivo', setFigurinha())
import React, { useState, useEffect } from "react";
import axios from "axios";
import { Figurinha } from "./figurinha";

export const FigAlbum = () => {
  const figurinhas = [
    { num: 1, nome: "AAAAA", naturalidade: "Bento Gonçalves", dtnasc: "11/11/2011", img: "15-4020", colada: 1 },
    { num: 2, nome: "BBBBB", naturalidade: "Bento Gonçalves", dtnasc: "12/12/2012", img: "15-4020", colada: 0 },
  ];

  const [fig, setFig] = useState([]);

  useEffect(() => {
    const load = async () => {
      const r = await axios.get("http://127.0.0.1:8000/");

      setFig(r.data);
    };

    load();
  }, []);

  return (
    <div class="div_album">
      <div class="row">
        {figurinhas.map((figurinha) => (
          <Figurinha key={figurinha.num} {...figurinha} />
        ))}
      </div>
    </div>
  );
};
