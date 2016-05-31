tmp = gets.chomp.strip.split(' ').map(&:to_i)
test_cases = tmp[1]
arr = gets.chomp.strip.split(' ').map(&:to_i).sort

def binary_search arr, key
  low = 0
  high = arr.length - 1
  while(high >= low) do
    mid = low  + (high - low) / 2
    if arr[mid] > key
      high = mid - 1
    elsif arr[mid] < key
      low = mid + 1
    else
      return mid
    end
  end
  return -1
end


input = []

test_cases.times do
  input << gets.chomp.strip.to_i
end

input.each do |value|
  temp = binary_search arr, value
  puts 'YES' if temp >=0
  puts 'NO' if temp < 0
end