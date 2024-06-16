import axiosClient_not_token from "./axiosClient_not_token";

const hangsxApi = {
  listgiohang: (params) => {
    const url = "/giohang/listgiohang";
    return axiosClient_not_token.post(url, params);
  },
};

export default hangsxApi;
