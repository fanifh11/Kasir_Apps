package com.example.kasirapp.model;

import com.google.gson.annotations.SerializedName;

public class Data_Model {

    @SerializedName("kode_buku")
    private String kode_buku;
    @SerializedName("judul_buku")
    private String judul_buku;
    @SerializedName("jumlah_stock")
    private String jumlah_stock;

    public String getKode_barang() {
        return kode_buku;
    }

    public void setKode_barang(String kode_buku) {
        this.kode_buku = kode_buku;
    }

    public String getNama_barang() {
        return judul_buku;
    }

    public void setNama_barang(String judul_buku) {
        this.judul_buku = judul_buku;
    }

    public String getJumlah_barang() {
        return jumlah_stock;
    }

    public void setJumlah_barang(String jumlah_stock) {
        this.jumlah_stock = jumlah_stock;
    }
}