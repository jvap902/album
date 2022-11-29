import React, {useEffect, useState} from "react";
import _ from "lodash";
import ReactDOM from "react-dom/client";
import { Figurinha } from "./components";
import axios from 'axios';

const root = ReactDOM.createRoot(document.getElementById("root"));
root.render(
  <React.StrictMode>
    <Figurinha />
  </React.StrictMode>
);