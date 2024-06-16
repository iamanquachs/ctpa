import axiosClient_not_token from "./axiosClient_not_token";

const danhmucApi = {
  listdanhmuc: (params) => {
    const url = "/danhmuc/listdanhmuc";
    return axiosClient_not_token.post(url, params);
  },
};

export default danhmucApi;
