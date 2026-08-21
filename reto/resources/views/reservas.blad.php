<div class="mb-3">
    <label for="stock" class="form-label">
        Disponibilidad
    </label>

    <input
        type="number"
        name="stock"
        id="stock"
        min="0"
        step="1"
        value="{{ old('stock', $reserva->stock) }}"
        class="form-control @error('stock') is-invalid @enderror"
        required
    >

    @error('stock')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
    @enderror
</div>
