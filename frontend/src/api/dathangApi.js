import axiosClient_not_token from "./axiosClient_not_token";

const dathangApi = {
  dathangline_add: (params) => {
    const url = "/dathang/dathangline_add";
    return axiosClient_not_token.post(url, params);
  },
  dathangline_delete: (params) => {
    const url = "/dathang/dathangline_delete";
    return axiosClient_not_token.post(url, params);
  },
  list_kt_mshh_dathangline: (params) => {
    const url = "/dathang/list_kt_mshh_dathangline";
    return axiosClient_not_token.post(url, params);
  },
  update_dathangline: (params) => {
    const url = "/dathang/update_dathangline";
    return axiosClient_not_token.post(url, params);
  },
};

export default dathangApi;
