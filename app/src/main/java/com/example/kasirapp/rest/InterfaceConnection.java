package com.example.kasirapp.rest;

import com.example.kasirapp.Response.Data_Response;

import retrofit2.Call;
import retrofit2.http.DELETE;
import retrofit2.http.Field;
import retrofit2.http.FormUrlEncoded;
import retrofit2.http.GET;
import retrofit2.http.POST;
import retrofit2.http.PUT;
import retrofit2.http.Path;

public interface InterfaceConnection {

    @GET("buku")
    Call<Data_Response> daftar_buku();

    @FormUrlEncoded
    @POST("buku/insert")
    Call<Data_Response> tambah_buku(
            @Field("judulBuku") String judulBuku,
            @Field("jmlStock") String jmlStock
    );

    @DELETE("buku/delete/{kode_buku}")
    Call<Data_Response> hapus_barang(@Path("kode_buku") String id
    );


    @FormUrlEncoded
    @PUT("buku/update/{kode_buku}")
    Call<Data_Response> update_barang(@Path("kode_buku") String id,
                                      @Field("judulBuku") String nama_barang,
                                      @Field("jmlStock") String jumlah_stock
    );

}