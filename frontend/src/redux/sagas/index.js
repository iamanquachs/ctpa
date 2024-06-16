import { takeEvery, call, put } from "redux-saga/effects";
import * as actions from "../actions";
import giohangApi from "../../api/giohangApi";
function* createGiohangSaga(action) {
  try {
    const giohang = yield call(giohangApi.listgiohang, action.payload);
    yield put(actions.createGiohang.createGiohangSuccess(giohang));
  } catch (err) {
    console.error(err);
  }
}

function* mySaga() {
  yield takeEvery(
    actions.createGiohang.createGiohangRequest,
    createGiohangSaga
  );
}

export default mySaga;
