<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Model;

class produk extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'photo',
        'harga',
        'stock',
        'kategori_id'      

    ];

    public function kategori(): BelongsTo
    {
        return $this->belongsTo(kategori::class, 'kategori_id');
    }
    public function keranjang()
    {
        return $this->hasMany(Cart::class);
    }
    static function detail_produk($id_produk)
    {
        // Ambil data produk berdasarkan ID
        $data = Produk::where('id_produk', $id_produk)->first();
    
        // Kembalikan data produk
        return $data;
    }
}
