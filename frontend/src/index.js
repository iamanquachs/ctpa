import React from "react";
import ReactDOM from "react-dom/client";
import { BrowserRouter as Router } from "react-router-dom";
import "./assets/css/index.css";
import "./assets/css/responsive_tablet.css";
import "./assets/css/responsive_mobile.css";
import App from "./App";
import "tw-elements";
import { Provider } from "react-redux";
import { createStore, applyMiddleware } from "redux";
import createSageMiddleware from "redux-saga";
import reducers from "./redux/reducers";
import mySaga from "./redux/sagas";
import { composeWithDevTools } from "redux-devtools-extension";

const sagaMiddleware = createSageMiddleware();
const store = createStore(
  reducers,
  composeWithDevTools(applyMiddleware(sagaMiddleware))
);
sagaMiddleware.run(mySaga);
const root = ReactDOM.createRoot(document.getElementById("root"));
root.render(
  <Router>
    <Provider store={store}>
      <App />
    </Provider>
  </Router>
);
