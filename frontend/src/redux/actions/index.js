import { createActions, createAction } from "redux-actions";

export const getType = (reduxAction) => {
  return reduxAction().type;
};

//todo push gio hang
export const createGiohang = createActions({
  createGiohangRequest: (payload) => payload,
  createGiohangSuccess: (payload) => payload,
  createGiohangFailure: (err) => err,
});
// export const showModal = createAction("SHOW_MODAL");
// export const hideModal = createAction("HIDE_MODAL");
