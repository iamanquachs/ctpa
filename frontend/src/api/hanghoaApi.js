import axiosClient_not_token from "./axiosClient_not_token";

const hanghoaApi = {
  list: (params) => {
    const url = "/hanghoa/list";
    return axiosClient_not_token.post(url, params);
  },
  listchitietsp: (params) => {
    const url = "/hanghoa/listchitietsp";
    return axiosClient_not_token.post(url, params);
  },
  list_motasp: (params) => {
    const url = "/hanghoa/listmotasp";
    return axiosClient_not_token.post(url, params);
  },
  list_theonhom: (params) => {
    const url = "/hanghoa/listtheonhom";
    return axiosClient_not_token.post(url, params);
  },
  list_search: (params) => {
    const url = "/hanghoa/list_search";
    return axiosClient_not_token.post(url, params);
  },
};

export default hanghoaApi;
