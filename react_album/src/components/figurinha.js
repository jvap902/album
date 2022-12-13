import React from "react";

export const Figurinha = ({ data }) => {
  if (data.colada) {
    return (
      <div className="col">
        <div className="card">
          <img className="card-img-top fig_name" src={data.img} alt="Card cap" />
          <div className="card-body">
            <p className="card-text">{data.nome}</p>
            <p className="card-text">{data.naturalidade}</p>
            <p className="card-text">{data.dtnasc}</p>
          </div>
        </div>
      </div>
    );
  } else {
    return (
      <div className="col">
        <div className="card">
          <div className="card-body n_colada">
            <h2>{data.numero}</h2>
          </div>
        </div>
      </div>
    );
  }
};
