import React, { useState } from "react";

export const Figurinha = ({ img, nome, naturalidade, dtnasc, num, colada }) => {
  if (colada) {
    return (
      <div class="col">
        <div class="card">
          <img class="card-img-top" src={img} alt="Card image cap" />
          <div class="card-body">
            <p class="card-text" style="font-weight: bold;">
              {nome}
            </p>
            <p class="card-text">{naturalidade}</p>
            <p class="card-text">{dtnasc}</p>
          </div>
        </div>
      </div>
    );
  } else {
    <div class="col">
    <div class="card">
        <div class="card-body">
            <p>{num}</p>
        </div>
    </div>
</div>
  }
};
